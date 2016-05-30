<?php



App::uses('Security', 'Utility');

class CompaniesController extends AppController{
	#フォームヘルパー
	public $helpers = array('Html', 'Form');

	public	$uses = Array('Company', 'Event');

	public	$components = array(
		'Session',
		'Auth' => array(
			'authenticate' => array(
				'Form' => array(
					'userModel' => 'Company',
					'fields' => array('username' => 'email', 'password' => 'password'),
					'passwordHasher' => 'Blowfish')
				),
				'loginAction' => array('controller' => 'Companies', 'action' => 'login'),
				'loginRedirect' => array('controller' => 'Companies', 'action' => 'index'),
				'logoutRedirect' => array('controller' => 'Companies', 'action'=> 'login'),
				'authError' => 'ログインしてください',
				
			)
		);
	#共通スクリプト
	public function beforeFilter(){
		#ページタイトル設定
		$this->set('title_for_layout', 'kokokara');
		$this->Auth->allow('login','logout','signup');
		AuthComponent::$sessionKey = "Auth.Companies";
		//最終ログイン処理
		//$myData=$this->Session->read("myData");
		//if($myData!=null){
		//	$id = $myData['Company']['id'];
		//}
	}

	public function index(){
		debug($this->Auth->user());
	//	$this->loadModel("Event");
	//	$this->set('events', $this->Event->find("all"));
	//	//Session が空じゃなかったら
	//	if($this->Session->read('myData')){
			//$id=$this->Session->read("myData")['Student']['id'];
	//		$this->set('myData', $this->Session->read('myData'));
	//	}
	}

	#新規登録処理
	public function signup(){
	
		if ($this->request->is('post')) {
                $this->Company->create();
                if ($this->Company->save($this->request->data)) {
                        $this->Session->setFlash(__('登録が完了しました。'));
                        return $this->redirect(array('action' => 'login'));
                }else{
                        $this->Session->setFlash(__('登録に失敗しました'));
              }
        }
    	
	}

	#ログイン処理
	public function login(){
		if($this->request->is('post')){
			if($this->Auth->login()){
				$this->Session->setFlash('ログイン完了です');
				return $this->redirect($this->Auth->redirect('index'));
			}else{
			$this->Session->setFlash('ログインに失敗しました')	;
		}


	/*	//debug($this->Session->read('apply'));
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
				$this->redirect('index');
				//申請からログインに飛んだかどうか
			} else{
				$this->Session->setFlash('ユーザ名かパスワードが違います');
			}*/
		}
	
	}

	#ログアウト処理
	public function logout() {
		if($this->Auth->logout($this->request->data)){
			$this->Session->setFlash('ログアウトしました');
			return $this->redirect($this->Auth->logout());
		}
	//	$this->redirect($this->Auth->logout());
	//	$this->Session->setFlash('ログアウトしました');
	//	ログアウトメッセージ表示されなかった。。
	}

	#更新処理
	//public function edit(){
	//	if($this->request->is('post')){
	//		if($this->Company->save($this->request->data)){
	//			$this->Session->setFlash('更新完了！');
	//			$this->Session->write('myData', $this->company->findById($this->request->data['Company']['id']));
	//			$this->redirect(array('controller' => 'companies', 'action' => 'index'));
	//		}else{
	//			$this->Session->setFlash('更新失敗！');
	//		}
	//	}
	//}



	/*#2015/05/01 by mark
	public function welcome(){
		//Session が空じゃなかったら
		if($this->Session->read('myData')){
			//$id=$this->Session->read("myData")['Student']['id'];
			$this->set('myData', $this->Session->read('myData'));
		}
	}
	*/

	public function addevent(){
		debug($this->Auth->user());
		if($this->request->is('post')){
			if($this->Company->Event->save($this->request->data)){
				$this->Session->setFlash('イベント登録が完了	しました。');
				$this->redirect('index');
			}else{
				$this->Session->setFlash('登録に失敗しました。');
			}

		}


	}


}
