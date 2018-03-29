<?php
class Student{
	public $name;
	public $age;
	private $score;

	function Student($name, $age){
		$this->name = $name;
		$this->age = $age;
	}

	function setScore($score){
		$this->score = $score;
	}

}