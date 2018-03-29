<?php
class SetStudent
{
	public $name;
	public $age;
	protected $score;
}

class setNameAge extends SetStudent{
	function setNameAge($name, $age){
		$this->name = $name;
		$this->age = $age;
	}
}

class getNameAge extends setNameAge{
	function getNameAge(){
		echo "Name".$this->name;
		echo "Age".$this->age;
	}
}

class setScore extends setNameAge{
	function setScore($score){
		$this->score = $score;
	}
}

class getScore extends setScore{
	function getScore(){
		echo "Score".$this->score;
	}
}

