<?php
/**
 * Created by PhpStorm.
 * User: satoudai
 * Date: 2015/02/27
 * Time: 0:22
 */
class FacebookUser extends AppModel{
	public $belongsTo = array('Student' => array(
		'className' => 'Student',
		'foreignKey' => 'student_id'
	));
}

