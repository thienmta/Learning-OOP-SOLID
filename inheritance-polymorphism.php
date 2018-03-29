<?php
abstract class Student{
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

	abstract function getSex();
}

class MaleStudent extends Student{
	public $gifted;
	function MaleStudent($name, $age, $gifted){
		$this->name = $name;
		$this->age = $age;
		$this->gifted = $gifted;
	}

	function getGifted(){
		echo "Nang khieu: ".$this->gifted;
	}

	function getSex(){
		echo "Gioi tinh: Nam";
	}
}

$male = new MaleStudent("Nguyen Thien", 21, "Da bong");
$male->setScore(8);
$male->getStudent();
$male->getGifted();
$male-> getSex();