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
		echo "Name: ".$this->name;
		echo "Age: ".$this->age;
	}
}

class setScore extends getNameAge{
	function setScore($score){
		$this->score = $score;
	}
}

class getScore extends setScore{
	function getScoreStudent(){
		echo "Score: ".$this->score;
	}
}

$score = new getScore();
$score->setScore(7);
$score->setNameAge("Nguyen Van Thien", 22);
$score->getNameAge();
$score->getScoreStudent();

