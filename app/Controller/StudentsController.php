<?php
/**
 * Created by PhpStorm.
 * User: satoudai
 * Date: 2015/02/26
 * Time: 9:41
 */
App::uses('Security', 'Utility');

class StudentsController extends AppController{
	#フォームヘルパー
	public $helpers = array('Html', 'Form');

	#共通スクリプト
	public function beforeFilter(){
		#ページタイトル設定
		$this->set('title_for_layout', 'kokokara');
		//最終ログイン処理
		$myData=$this->Session->read("myData");
		if($myData!=null){
			$id = $myData['Student']['id'];
			$this->updateLogin($id);
		}
	}

	#ユーザーインデックス
	public function index(){
		$this->loadModel("Event");
		$this->set('events', $this->Event->find("all"));
		//Session が空じゃなかったら
		if($this->Session->read('myData')){
			//$id=$this->Session->read("myData")['Student']['id'];
			$this->set('myData', $this->Session->read('myData'));
		}
	}

	//ログイン時間update
	public function updateLogin(){
		if($this->Session->read('myData')){
			$id=$this->Session->read("myData")['Student']['id'];
			$this->Student->updateLogin($id);
		}
		return;
	}


	#新規登録処理
	public function signup(){
		//Session が入っていたら
		if($this->Session->read('myData')){
			$this->set('myData', $this->Session->read('myData'));
		}else{
			$this->set('myData', null);
		}
		//フォーム情報受信
		if($this->request->is('post')){
			//debug($this->request->data);
			//emailがユニークかどうか
			if(!isset($this->request->data['Student']['id'])){
				//ノーマル新規登録
				$user = $this->Student->find('first', array(
					'conditions' => array('Student.email' => $this->request->data['Student']['email'])
				));
				if(!$user){ //新規ユーザだったら
					if($this->Student->save($this->request->data)){
						$this->Session->setFlash('ユーザ登録に成功しました');
						$this->Session->write('myData', $this->Student->findById($this->Student->getLastInsertID()));
						$this->redirect(array('action' => 'index'));
					}else{
						$this->Session->setFlash('ユーザ登録に失敗しました');
					}
				} else{ //既存のユーザがいたら
					$this->Session->setFlash('このメールアドレスは既に登録されています');
				}
			} else{
				//FB新規登録
				if($this->Student->save($this->request->data)){
					$this->Session->setFlash('ユーザ登録に成功しました');
					$this->Session->write('myData', $this->Student->findById($this->request->data['Student']['id']));
					$this->Session->write('myData', $this->Student->findById($this->Student->getLastInsertID()));
					$this->redirect(array('action' => 'index'));
				}else{
					$this->Session->setFlash('ユーザ登録に失敗しました');
				}

			}
		}
	}

	#ログイン処理
	public function login(){
		//debug($this->Session->read('apply'));
		if($this->request->is('post')){
			//password ハッシュ化
			$password = Security::hash($this->request->data['Student']['password'], 'sha1', true);
			//ログイン処理
			$student = $this->Student->find('first', array(
				'conditions' => array('Student.email' => $this->request->data['Student']['email'], 'Student.password' => $password),
				'limit' => 1
			));
			if($student){
				$this->Session->setFlash('ログイン完了です');
				$this->Session->write('myData', $student);
				$this->updateLogin();
				//申請からログインに飛んだかどうか
				if($this->Session->read('apply')){
					$event_id = $this->Session->read('apply');
					$this->Session->delete('apply');
					$this->redirect('/events?id='.$event_id);
				}else{
					$this->redirect(array('action' => 'welcome'));
				}
			} else{
				$this->Session->setFlash('ユーザ名かパスワードが違います');
			}
		}

	}

	#ログアウト処理
	public function logout(){
		$this->Session->delete('myData');
		$this->redirect(array('action' => 'index'));
	}

	#更新処理
	public function edit(){
		if($this->request->is('post')){
			if($this->Student->save($this->request->data)){
				$this->Session->setFlash('更新完了！');
				$this->Session->write('myData', $this->Student->findById($this->request->data['Student']['id']));
				$this->redirect(array('controller' => 'students', 'action' => 'index'));
			}else{
				$this->Session->setFlash('更新失敗！');
			}
		}
	}

	#パスワード再設定
	public function passwordForgot(){
		//email 打ち込み
		if($this->request->is('post')){
			$student = $this->Student->find('first', array(
				'conditions' => array('Student.email' => $this->request->data['Student']['email']),
				'limit' => 1
			));
			if($student){
				//url取得
				$url = Router::url('', true);
				//sessionにemail情報書き込み
				$this->Session->write('forPasswordChange', $student['Student']['email']);
				//ここにメール関数を書く
				App::uses( 'CakeEmail', 'Network/Email');
				$email = new CakeEmail('gmail');
				$email->from( array( 'mark.sato1111@gmail.com' => 'mark.sato1111@gmail.com'));  // 送信元
				$email->to($student['Student']['email']);                      // 送信先
				$email->subject('Kokokara Group : パスワードの変更');                      // メールタイトル
				// メール送信
				$email->send("以下のURLからパスワードの再発行をしてください。\n\n".$url.'?hash='.$student['Student']['password']);
				$this->Session->setFlash('メールアドレス宛にパスワード再発行URLが送信されました');
			}
		}
		//メールのURLから
		if($this->params['url']){
			$this->set('params', $this->params['url']);
			//sessionから情報取得
			//有効期限切れ処理
			$email = $this->Session->read('forPasswordChange');
			if($email==null){
				$this->Session->setFlash('有効期限が切れています。もう一度やり直してください');
				$this->redirect(array('action' => 'login'));
				exit;
			}
		}
	}

	#パスワード更新
	public function updatePassword(){
		if($this->request->is('post')){
			//sessionから情報取得
			//有効期限切れ処理
			$email = $this->Session->read('forPasswordChange');
			if($email==null){
				$this->Session->setFlash('有効期限が切れています。もう一度やり直してください');
				$this->redirect(array('action' => 'login'));
				exit;
			}
			$student = $this->Student->find('first', array(
				'conditions' => array('Student.email' => $email),
				'limit' => 1
			));
			//パスワード更新
			$student['Student']['password'] = $this->request->data['Student']['password'];
			if($this->Student->save($student)){
				$this->Session->setFlash('パスワードの変更に成功しました');
				$this->redirect(array('action' => 'login'));
			}else{
				$this->Session->setFlash('パスワードの変更に失敗しました');
			}
		}
	}

	#2015/05/01 by mark
	public function welcome(){
		//Session が空じゃなかったら
		if($this->Session->read('myData')){
			//$id=$this->Session->read("myData")['Student']['id'];
			$this->set('myData', $this->Session->read('myData'));
		}
	}


}
