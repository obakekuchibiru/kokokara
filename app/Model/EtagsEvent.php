<?php
/**
 * Created by PhpStorm.
 * User: satoudai
 * Date: 2015/03/04
 * Time: 11:00
 */

class EtagsEvent extends AppModel{
	public $useTable = "etags_events";
	public $belongsTo = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id'
		),
		'Etag' => array(
			'className' => 'Etag',
			'foreignKey' => 'etag_id'
		)
	);
}
