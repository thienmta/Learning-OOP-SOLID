<?php
class Student
{
	protected $name;
	protected $year_of_birth;
	protected $score;

	function Student($name, $year_of_birth, $score) {
		$this->name = $name;
		$this->year_of_birth = $year_of_birth;
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
		echo "Year of birth: ".$this->year_of_birth."\n";

		$score = $this->score;

		if($score >=0 && $score<4){
			echo "Hoc luc: Yeu \n";
		}
		elseif($score >=4 && $score<7){
			echo "Hoc luc: Trung binh\n";
		}
		elseif($score >=7 && $score<9){
			echo "Hoc luc: Kha\n";
		}
		elseif($score >=9 && $score<=10){
			echo "Hoc luc: Gioi\n";
		}
	}

}

class SayAgeStudent extends SayStudent{
	function showAgeStudent() {
		$age = 2018 - $this->year_of_birth;
		echo "Age: " . $age;
	}
}

$myStudent = new SayAgeStudent("Nguyen Van Thien", 1996, 7);
$myStudent->showStudent();
$myStudent->showAgeStudent();
