<?php
/**
 * Created by PhpStorm.
 * User: satoudai
 * Date: 2015/03/04
 * Time: 11:01
 */
class StagsStudent extends AppModel{
	public $useTable = "stags_students";
	public $belongsTo = array(
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'student_id',
		),
		'Stag' => array(
			'className' => 'Stag',
			'foreignKey' => 'stag_id',
		)
	);

}