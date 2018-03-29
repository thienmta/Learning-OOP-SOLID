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
		$checkAge = $this->age;
		if($checkAge >= 0 && $checkAge <10){
			echo "Tre con ";
		}
		elseif($checkAge >= 10 && $checkAge <15){
			echo "Thieu nien";
		}
		elseif($checkAge >= 15 && $checkAge <20){
			echo "Thanh nien";
		}
		elseif($checkAge >= 20 && $checkAge <50){
			echo "Trung nien";
		}
		elseif($checkAge >= 50){
			echo "Lao nien";
		}
	}
}

$thien = new Person("Nguyen Van Thien");
$thien->getPerson();
$thien->setAge(19);
$thien->getAge();

$ha = new Person("Nguyen Thi Ha");
$ha->getPerson();
$ha->setAge(45);
$ha->getAge();