<?php
class Student{
	public $name;
	public $age;
	protected $score;

	function Student($name, $age){
		$this->name = $name;
		$this->age = $age;
	}

	function setScore($score){
		if($score>=0 && $score<=10){
			$this->score = $score;
		}
		else{
			$this->score = 0;
		}
	}

	function getStudent(){
		echo "Name student: ".$this->name;
		echo "Age student: ".$this->age;

		$checkScore = $this->score;

		if($checkScore >=0 && $checkScore<4){
			echo "Hoc luc: Yeu";
		}
		elseif($checkScore >=4 && $checkScore<7){
			echo "Hoc luc: Trung binh";
		}
		elseif($checkScore >=7 && $checkScore<9){
			echo "Hoc luc: Kha";
		}
		elseif($checkScore >=9 && $checkScore<=10){
			echo "Hoc luc: Gioi";
		}
	}
}