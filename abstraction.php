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
