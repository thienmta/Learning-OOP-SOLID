<?php
class Person{
	public $name;
	private $age;
	
	// __constructor
	function Person($name){
		$this->name = $name;
	}
	function getPerson(){
		echo "Name: ". $this->name;
	}

	function setAge($age){
		if($age > 0){
			$this->age = $age;
		}
		else{
			$this->age = 0;
		}
	}

	function getAge(){
		echo "Age: ". $this->age;
	}
}

$thien = new Person("Nguyen Van Thien");
$thien->getPerson();
$thien->setAge(20);
$thien->getAge();

$ha = new Person("Nguyen Thi Ha");
$ha->getPerson();
$ha->setAge(20);
$ha->getAge();