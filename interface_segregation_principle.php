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

	function setSex($name){
		$this->name = $name;
	}

	function getSex($name){
		echo "Name: ".$this->name;
	}
}