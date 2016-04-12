<?php

class Ctag extends AppModel{
	public $useTable = "ctags";
	public $hasAndBelongsToMany = 'Company';

}