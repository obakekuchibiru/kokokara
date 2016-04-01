<?php
/**
 * Created by PhpStorm.
 * User: satoudai
 * Date: 2015/02/26
 * Time: 9:38
 */
App::uses('Security', 'Utility');

class Student extends AppModel{
	//タグアソシエーション
	//アソシエーション
	public $hasAndBelongsToMany = array(
		'Stag',
		'Apply' => array(
			'className'              => 'Event',
			'joinTable'              => 'applies_events',
			'foreignKey'             => 'student_id',
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
			'foreignKey'             => 'student_id',
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

	//FBアソシエーション
	public $hasOne = array(
		"FacebookUser" => array(
			'className' => 'FacebookUser',
			'foreignKey' => 'student_id'
		)
	);
	//validation
	public $validate = array(
		'name' => array(
			'rule' => 'notEmpty',
			'message' => 'ユーザ名を入力してください',
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
		'gender' => array(
			'rule' => array('inList', array('male', 'female')),
			'message' => '男性または女性を選択してください',
			'required' => true
		),
		'birthday' => array(
			'rule' => 'date',
			'message' => '生年月日を入力してください',
			'required' => true
		),
		'university' => array(
			'rule' => 'notEmpty',
			'message' => '大学名を入力してください',
			'required' => true
		),
		'faculty' => array(
			'rule' => 'notEmpty',
			'message' => '学部を入力してください',
			'required' => true
		),
		'year' => array(
			'rule' => 'numeric',
			'message' => '学年を入力してください',
			'required' => true
		)
	);

	public function loadModel($model_name) {
		App::uses($model_name,'Model');
		$this->{$model_name} = new $model_name();
	}



	#パスワードハッシュ化
	public function beforeSave($options = array()){
		if(isset($this->data['Student']['password'])){
			$this->data['Student']['password'] = Security::hash($this->data['Student']['password'], 'sha1', true);
		}
		return true;
	}




	//ユーザーのログの総数を返す 使い方はAdminController/studentsにある
	public function getLog($id){
		$this->unbindModel(
			array('hasMany' => array('Image'),
				"hasAndBelongsToMany"=>array("Stag","Apply","Log"))
		);
		$this->loadModel("EventsLog");
		$logs=$this->EventsLog->find("all",
			array( "fields" => array("sum(counter) AS `logs`"),
				"conditions"=>array("student_id"=>$id)));
		if($logs[0][0]["logs"]==null){
			$logs[0][0]["logs"]=0;
		}

		return $logs[0][0];
	}


	public function getApply($id){
		$this->unbindModel(
			array('hasMany' => array('Image'),
				"hasAndBelongsToMany"=>array("Stag","Apply","Log"))
		);
		$this->loadModel("AppliesEvent");
		$applies=$this->AppliesEvent->find("all",
			array( "fields" => array("count(event_id) AS `applies`"),
				"conditions"=>array("student_id"=>$id)));
		if($applies[0][0]["applies"]==null){
			$applies[0][0]["applies"]=0;
		}

		return $applies[0][0];
	}


	public function adminfind(){
		$this->unbindModel(
			array(//'hasOne' => array('FacebookUser'),
				"hasAndBelongsToMany"=>array("Stag","Apply","Log"))
		);


		//1回studentとってくる　non asosi
		$students=$this->find("all");



		//その後そいつらのlogとapplyとってくる
		for($i=0;$i<count($students);$i++){
			$id=$students[$i]["Student"]["id"];
			$log=$this->getLog($id);
			$applies=$this->getApply($id);
			$students[$i]+=$log+$applies;
		}


		return $students;
	}

	public function updateLogin($id){

		$this->unbindModel(
			array('hasOne' => array('FacebookUser'),
				"hasAndBelongsToMany"=>array("Stag","Apply","Log"))
		);

		$this->set(array(
			"id"=>$id,
			"modified"=> date('Y-m-d H:i:s')
		));
		$this->save();
	}




}

