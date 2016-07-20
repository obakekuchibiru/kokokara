<?php



class Feedback extends AppModel{
	
	public $useTable = 'feedbacks';

	public $belongsTo = array(
		'Student',
		'Company',
		);
}