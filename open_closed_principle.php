<?php
class Person{
	public $name;

	function Person($name){
		$this->name = $name;
	}

	function getNamePerson(){
		echo "Name: ".$this->name;
	}
}

class Student extends Person{
	private $age;
	function Student($age){
		$this->age = $age;
	}

	function getStudent(){
		echo "Age: ".$this->age;
	}
}

class Child extends Person{
	private $sex;
	function Student($sex){
		$this->sex = $sex;
	}

	function getStudent(){
		echo "Sex: ".$this->sex;
	}
}
