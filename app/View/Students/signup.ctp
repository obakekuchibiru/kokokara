<h2>ユーザー登録仮</h2>

<?php
	echo $this->Form->create('Student', array('url'=>'login'));
	echo $this->Form->input('name');
	$gender = array(
		'male' => '男性',
		'female' => '女性',
		);
	echo $this->Form->input('gender', array('type'=> 'radio', 'options' => $gender));
	echo $this->Form->input('birthday',  array('dateFormat' => 'YMD', 'maxYear' => date('Y'), 'minYear' => date('Y')-100, 'monthNames' => false, 'label' => array('text' => '誕生日')));
	echo $this->Form->input('university');
	echo $this->Form->input('graduate_year');
	echo $this->Form->input('email');
	echo $this->Form->input('password');
	echo $this->Form->end('登録する');

?>