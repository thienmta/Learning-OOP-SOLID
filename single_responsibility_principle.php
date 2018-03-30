<?php
class Student
{
	protected $name;
	protected $age;
	protected $score;

	function Student($name, $age, $score) {
		$this->name = $name;
		$this->age = $age;
		if(0 <= $score && $score <= 10) {
			$this->score = $score;
		}
		else {
			$this->score = 0;
		}
	}
}

class SayStudent extends Student {
	function showStudent(){
		echo "Name: ".$this->name."\n";
		echo "Age: ".$this->age."\n";

		$checkScore = $this->score;

		if($checkScore >=0 && $checkScore<4){
			echo "Hoc luc: Yeu \n";
		}
		elseif($checkScore >=4 && $checkScore<7){
			echo "Hoc luc: Trung binh\n";
		}
		elseif($checkScore >=7 && $checkScore<9){
			echo "Hoc luc: Kha\n";
		}
		elseif($checkScore >=9 && $checkScore<=10){
			echo "Hoc luc: Gioi\n";
		}
	}

}

$myStudent = new SayStudent("Nguyen Van Thien", 21, 7);
$myStudent->showStudent();
