<?php
class SetStudent
{
	public $name;
	protected $age;
	private $score;

	function SetStudent($name, $age){
		$this->name = $name;
		$this->age = $age;
	}

	function setScore($score){
		$this->score = $score;
	}

}
