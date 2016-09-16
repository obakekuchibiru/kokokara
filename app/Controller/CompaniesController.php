<?php



App::uses('Security', 'Utility');

class CompaniesController extends AppController{
	#フォームヘルパー
	public $helpers = array('Html','Form',);

	public $uses = Array('Company', 'Event');

	public $components = array(
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
		$this->loadModel('Event');
		$event = $this->Event->findBycompany_id($this->Auth->user('id'));
		$this->set('event', $event);
		$conditions = array("Review.company_id" => $this->Auth->user('id'), "Review.active" => "0");
		$this->loadModel('Review');
		$review = $this->Review->find('all', array('conditions' => $conditions));
		$this->set('review', $review);
		$this->loadModel('Attachment');
		$company = $this->Auth->user();
		$this->set('company', $company);
		$this->set('company_logo', $this->Attachment->findByForeign_keyAndModel($this->Auth->user('id'),'company'));
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
 	public function edit($id =null) {
 		$this->set('company', $this->Auth->user());
        $company_data = $this->Company->find('first',array(
            'conditions'=>array(
                'id'=>$id,
            )
        ));
        $this->set('company_data',$company_data);
        $this->Company->id = $id;
        if($this->request->is('get')) {
            	$this->request->data = $this->Company->read();            
        }
        if($this->request->is('post') || $this->request->is('put')){
        	pr($this->request->data);
		        if($this->Company->saveAll($this->request->data)) {
        	        $this->Session->setFlash('更新が完了しました');
            	    $this->redirect(array('action'=>'index'));
            			} else {
                			$this->Session->setFlash('更新に失敗しました');
            			  }        
    	}
    }




	public function addevent(){
		debug($this->Auth->user());
		$this->set('company', $this->Auth->user());
		$this->set('nowcompany', $this->Auth->user('id'));
			if($this->request->is('post')){
				if($this->Company->Event->saveAll($this->request->data)){
					$this->Session->setFlash('イベント登録が完了しました。');
					$this->redirect('index');
				}else{
				$this->Session->setFlash('登録に失敗しました。');
			}
		}
	}
	

 	public function editevent($id =null) {
 		$this->set('', $this->Auth->user());
        $company_data = $this->Company->find('first',array(
            'conditions'=>array(
                'id'=>$id,
            )
        ));
        $this->set('company_data',$company_data);
        $this->Company->id = $id;
        if($this->request->is('get')) {
            	$this->request->data = $this->Company->read();            
        }
        if($this->request->is('post') || $this->request->is('put')){
        	pr($this->request->data);
		        if($this->Company->saveAll($this->request->data)) {
        	        $this->Session->setFlash('更新が完了しました');
            	    $this->redirect(array('action'=>'index'));
            			} else {
                			$this->Session->setFlash('更新に失敗しました');
            			  }        
    	}
    }

    public function confirmevent($id=null){
    	
    }



	public function reviewindex(){
		$conditions = array("Review.company_id" => $this->Auth->user('id'));
		$this->loadModel('Review');
		$this->set('review', $this->Review->find('all', array('conditions' => $conditions)));
	}

	public function reviewconfirm($id){
		$this->loadModel('Review');
		$data = array('Review' => array('id' => $id, 'active' => 1));
		$fields = array('active');
		if($this->request->is('get')){
			throw new MethodNotAlloewdExeption();
		}
		if($this->Review->save($data, 'false', $fields)){
			$this->Session->setFlash('レビューを承認しました。');
			$this->redirect(array('action'=>'index'));
		}
	}

	public function addfeedback($id=null){
		$this->loadModel('Review');
		$this->loadModel('Feedback');
		$this->set('company', $this->Auth->user('id'));
        $this->Review->id = $id;
        $this->set('review',$id);
		if ($this->request->is('post')) {
				$this->loadModel('Review');
                $this->Feedback->create();
                if ($this->Feedback->save($this->request->data)) {
                        $this->Session->setFlash(__('フィードバックを送信しました'));
                        return $this->redirect(array('action' => 'reviewindex'));
                }else{
                        $this->Session->setFlash(__('フィードバックの送信に失敗しました。'));
              }
        }
   	}

	public function feedbackindex(){

	}

	public function editfeedback(){

	}

	

}
