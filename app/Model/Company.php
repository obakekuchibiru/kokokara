<?php



App::uses('Security', 'Utility');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
App::uses('AppModel', 'Model');

class Company extends AppModel{

	public $useTable = 'companies';

	public $hasMany = array(
		'Event' => array(
			'className' => 'Event',
		),
		'Logo'=> array(
			'className' => 'Attachment',
            'foreignKey' => 'foreign_key',
            'conditions' => array(
               'Logo.model' => 'Company')
            ),
		'Review' => array(
			'className' => 'Review'),
	);

	
	


	//validation
	public $validate = array(
		'name' => array(
			'rule' => 'notEmpty',
			'message' => '企業名を入力してください',
			'required' => true
		),
		'email' => array(
			array(
				'rule' => 'email',
				'message' => '有効なメールアドレスを入力してください'
			),

			array(
				'rule' => 'isUnique',
				'message' => 'そのメールアドレスは既に使われています'
			)
		),
		'password' => array(
				array(
			'rule' => 'alphaNumeric',
			'message' => '有効なパスワードを入力してください',
//			'required' => true
			),
				array(
			'rule' => 'passwordConfirm',
			'message' => 'パスワードが一致していません',
			),
		),
		'password_confirm' => array(
				array(
			'rule' => 'notEmpty',
			'message' => 'パスワード(確認)を入力してください',
				),

		),
		'kokokara_pass' => array(
				array(
			'rule' => 'notEmpty',
			'message' => 'kokokara_passを入力してください',
				),
				array(
			'rule' => 'kokokaraPass',
			'message' => 'kokokara_passが正しくありません',
				),
		),
		
	);

	public function passwordConfirm($check){
		if($this->data['Company']['password'] === $this->data['Company']['password_confirm']){
			return true;
		}else{
			return false;
		}
	}

	public function kokokaraPass($check){
		if($this->data['Company']['kokokara_pass'] == ""){
			return true;
		}else{
			return false;
		}
	}

	public function loadModel($model_name) {
		App::uses($model_name,'Model');
		$this->{$model_name} = new $model_name();
	}

	public function afterSave($created, $options = array()){
    parent::afterSave($created,$options);
 
    //updating authentication session
    App::uses('CakeSession', 'Model/Datasource');
    CakeSession::write('Auth',$this->findById(AuthComponent::user('id')));
 
    return true;
}



	#パスワードハッシュ化
	//public function beforeSave($options = array()){
	//	if(isset($this->data['Company']['password'])){
	//		$this->data['Company']['password'] = Security::hash($this->data['Company']['password'], 'sha1', true);
	//	}
	//	return true;
	//}

	//public function beforeSave($options = array()) {
    //	$this->data['Company']['password'] = AuthComponent::password($this->data['Company']['password']);
    //	return true;
  	//}

  	public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $passwordHasher = new BlowfishPasswordHasher();
        $this->data[$this->alias]['password'] = $passwordHasher->hash(
            $this->data[$this->alias]['password']
        );
    }
    return true;
	}
  
	protected function _getCurrentUser() {
    App::uses('AuthComponent',  'Controller/Component');
    return AuthComponent::user();
	}


  	public function addEvent(){
  		if(!empty($this->request->data)){
  			$company = $this->_getCurrentUser();

  			if(!empty($company)){
  				$this->request->data['Event']['companies_id'] = $this->Company->id;
  				$this->Company->Event->Save($this->request->data);
  			}
  		}
  
  }


 }