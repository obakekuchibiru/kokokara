<?php



App::uses('Security', 'Utility');

class Company extends AppModel{
	//タグアソシエーション
	//アソシエーション
/*	public $hasAndBelongsToMany = array(
		//'Ctag',
		'Apply' => array(
			'className'              => 'Event',
			'joinTable'              => 'applies_events',
			'foreignKey'             => 'company_id',
			'associationForeignKey'  => 'event_id',
			'unique'                 => false,
			'conditions'             => '',
			'fields'                 => '',
			'order'                  => '',
			'limit'                  => '',
			'offset'                 => '',
			'finderQuery'            => '',
			'deleteQuery'            => '',
			'insertQuery'            => ''
		),
		'Log' => array(
			'className'              => 'Event',
			'joinTable'              => 'events_logs',
			'foreignKey'             => 'company_id',
			'associationForeignKey'  => 'event_id',
			'unique'                 => false,
			'conditions'             => '',
			'fields'                 => '',
			'order'                  => '',
			'limit'                  => '',
			'offset'                 => '',
			'finderQuery'            => '',
			'deleteQuery'            => '',
			'insertQuery'            => ''
		)
	);
*/
	
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
	public function beforeSave($options = array()){
		if(isset($this->data['Company']['password'])){
			$this->data['Company']['password'] = Security::hash($this->data['Company']['password'], 'sha1', true);
		}
		return true;
	}

}