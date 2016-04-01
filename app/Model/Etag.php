<?php
/**
 * Created by PhpStorm.
 * User: satoudai
 * Date: 2015/03/04
 * Time: 11:22
 */
class Etag extends AppModel
{
	public $useTable = "etags";

	public $hasAndBelongsToMany = array(
		"Event" => array(
			"className" => "Event",
			"join_table" => "etags_events",
			"foreignKey" => "etag_id",
			"associationForeignKey" => "event_id",
		)
	);




}

