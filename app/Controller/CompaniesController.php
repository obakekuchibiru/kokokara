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
	}

	public function index(){

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


		}
	
	}

	#ログアウト処理
	public function logout() {
		if($this->Auth->logout($this->request->data)){
			$this->Session->setFlash('ログアウトしました');
			return $this->redirect($this->Auth->logout());
		}
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
		$this->set('company', $this->Auth->user('id'));
		if($this->request->is('post')){
			if($this->Company->Event->save($this->request->data)){
				$this->Session->setFlash('イベント登録が完了しました。');
				$this->redirect('index');
			}else{
				$this->Session->setFlash('登録に失敗しました。');
			}

			}


		}

	public function editevent(){

	}

	public function reviewindex(){

	}

	public function addfeedback(){

	}

	public function feedbackindex(){

	}

	public function editfeedback(){

	}

	

}
