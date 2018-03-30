<?php
interface Name{
	function setName($name);
	function getName();

}

interface Sex{
	function setSex($sex);
	function getSex();

}

interface Color{
	function setColor($color);
	function getColor();

}

class Student implements Name, Sex{
	private $name;
	private $sex;
	function setName($name){
		$this->name = $name;
	}

	function getName($name){
		echo "Name: ".$this->name;
	}

	function setSex($sex){
		$this->sex = $sex;
	}

	function getSex($sex){
		echo "Sex: ".$this->sex;
	}
}

class Car implements Name, Color{
	private $name;
	private $color;
	function setName($name){
		$this->name = $name;
	}

	function getName($name){
		echo "Name: ".$this->name;
	}

	function setColor($color){
		$this->color = $color;
	}

	function getColor($color){
		echo "Color: ".$this->color;
	}
}