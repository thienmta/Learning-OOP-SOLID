<?php
class Person{
	public $name;
	private $age;
	
	// __constructor
	function Person($name){
		$this->name = $name;
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
		if(0<$this->age<=10){
			echo "Tre con";
		}
		if(10<$this->age<=15){
			echo "Thieu nien";
		}
		if(15<$this->age<=20){
			echo "Thanh nien";
		}
		if(20<$this->age<=50){
			echo "Trung nien";
		}
		if(50<$this->age){
			echo "Nguoi gia";
		}
	}
}
