<?php
class Person{
	private $name;

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

	function getAgeStudent(){
		echo "Age: ".$this->age;
	}
}

class Child extends Person{
	private $sex;
	function Child($sex){
		$this->sex = $sex;
	}

	function getSexChild(){
		echo "Sex: ".$this->sex;
	}
}

$student = new Student(21);
$student->Person("Nguyen Van Thien");
$student->getNamePerson();
$student->getAgeStudent();

$child = new Child("Nam");
$child->Person("Nguyen Son Ha");
$child->getNamePerson();
$child->getSexChild();