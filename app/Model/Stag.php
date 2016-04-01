<?php
/**
 * Created by PhpStorm.
 * User: satoudai
 * Date: 2015/03/04
 * Time: 11:21
 */
class Stag extends AppModel{
	public $useTable = "stags";
	public $hasAndBelongsToMany = 'Student';

}
