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
		echo "Name".$this->name;
		echo "Age".$this->age;
	}
}


