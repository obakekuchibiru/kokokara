<?php



class Review extends AppModel{
	
	public $useTable = 'reviews';

	public $belongsTo = array(
		'Student',
		);
}