<?php



App::uses('Security', 'Utility');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
App::uses('AppModel', 'Model');

class Company extends AppModel{

	public $useTable = 'companies';

	public $hasMany = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey'=> 'companies_id'
		));

	


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
			'rule' => 'alphaNumeric',
			'message' => '有効なパスワードを入力してください',
			'required' => true
		),
		
	);

	public function loadModel($model_name) {
		App::uses($model_name,'Model');
		$this->{$model_name} = new $model_name();
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


  public function addevent(){

  
  }


 }