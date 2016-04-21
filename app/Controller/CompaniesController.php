<?php



App::uses('Security', 'Utility');

class CompaniesController extends AppController{
	#フォームヘルパー
	public $helpers = array('Html', 'Form');

	#共通スクリプト
	public function beforeFilter(){
		#ページタイトル設定
		$this->set('title_for_layout', 'kokokara');
		//最終ログイン処理
		$myData=$this->Session->read("myData");
		if($myData!=null){
			$id = $myData['Company']['id'];
			$this->updateLogin($id);
		}
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
			if(!isset($this->request->data['Company']['id'])){
				//ノーマル新規登録
				$user = $this->Company->find('first', array(
					'conditions' => array('Company.email' => $this->request->data['Company']['email'])
				));
				if(!$user){ //新規ユーザだったら
					if($this->Company->save($this->request->data)){
						$this->Session->setFlash('ユーザ登録に成功しました');
						$this->Session->write('myData', $this->Company->findById($this->Company->getLastInsertID()));
						$this->redirect(array('action' => 'index'));
					}else{
						$this->Session->setFlash('ユーザ登録に失敗しました');
					}
				} else{ //既存のユーザがいたら
					$this->Session->setFlash('このメールアドレスは既に登録されています');
				}
			 

			}
		}
	}

	#ログイン処理
	public function login(){
		//debug($this->Session->read('apply'));
		if($this->request->is('post')){
			//password ハッシュ化
			$password = Security::hash($this->request->data['Company']['password'], 'sha1', true);
			//ログイン処理
			$company = $this->Company->find('first', array(
				'conditions' => array('Company.email' => $this->request->data['Company']['email'], 'Company.password' => $password),
				'limit' => 1
			));
			if($company){
				$this->Session->setFlash('ログイン完了です');
				$this->Session->write('myData', $company);
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
			if($this->Company->save($this->request->data)){
				$this->Session->setFlash('更新完了！');
				$this->Session->write('myData', $this->company->findById($this->request->data['Company']['id']));
				$this->redirect(array('controller' => 'companies', 'action' => 'index'));
			}else{
				$this->Session->setFlash('更新失敗！');
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
