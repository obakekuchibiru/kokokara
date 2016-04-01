<?php
/**
 * Created by PhpStorm.
 * User: satoudai
 * Date: 2015/03/04
 * Time: 11:02
 */
class AppliesEvent extends AppModel{
	public $useTable = "applies_events";
	public $belongsTo = array(
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'student_id',
		),
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
		)
	);
}
