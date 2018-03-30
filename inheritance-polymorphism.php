<?php
abstract class Student{
	protected $name;
	protected $age;
	protected $score;

	function Student($name, $age, $score){
		$this->name = $name;
		$this->age = $age;
		if($score>=0 && $score<=10){
			$this->score = $score;
		}
		else{
			$this->score = 0;
		}
	}

	function getStudent(){
		echo "Name student: ".$this->name."\n";
		echo "Age student: ".$this->age."\n";

		$checkScore = $this->score;

		if($checkScore >=0 && $checkScore<4){
			echo "Hoc luc: Yeu"."\n";
		}
		elseif($checkScore >=4 && $checkScore<7){
			echo "Hoc luc: Trung binh"."\n";
		}
		elseif($checkScore >=7 && $checkScore<9){
			echo "Hoc luc: Kha"."\n";
		}
		elseif($checkScore >=9 && $checkScore<=10){
			echo "Hoc luc: Gioi"."\n";
		}
	}

	abstract function getSex();
}

class Child extends Student{
	public $gifted;
	function setGifted($gifted) {
		$this->gifted = $gifted;
	}

	function getGifted(){
		echo "Nang khieu: ".$this->gifted."\n";
	}

	function getSex(){
		echo "Gioi tinh: Nam"."\n";
	}
}

$child = new Child("Nguyen Thien", 21, 7);
$child->setGifted("Da bong");
$child->getStudent();
$child->getGifted();
$child->getSex();

$sonha = new Child("Nguyen Son Ha", 22, 9);
$sonha->setGifted("Hat");
$sonha->getStudent();
$sonha->getGifted();
$sonha->getSex();
