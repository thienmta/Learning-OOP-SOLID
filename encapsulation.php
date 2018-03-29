<?php
class Student
{
	public $name;
	protected $age;
	private $score;

	function Student($name, $age){
		$this->name = $name;
		$this->age = $age;
	}

	function setScore($score){
		$this->score = $score;
	}

	function getStudent(){
		echo "Name: ".$this->name;
		echo "Age: ".$this->age;
		echo "Score: ".$this->score;
	}
}

class Child extends Student{
	function Child($name, $age){
		$this->name = $name;
		$this->age = $age;
	}

	// ghi de
	function getStudent(){
		echo "Name: ".$this->name;
		echo "Age: ".$this->age;
	}
}

$student = new Student("Nguyen Hoang Yen", 19);
$student->setScore(8);
$student->getStudent();

$child = new Child("Nguyen Van Thien", 21);
$child->getStudent();