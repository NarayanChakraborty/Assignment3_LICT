<?php

class student{

	public $cars=array();
	public $name;

    

	public function grade_profile($key,$value){

    //$name=$std;
	array_push($this->cars,array($key,$value));
	
	}

	public function print_name($name)
	{
		$this->name=$name;
	}

	public function show_result(){

  echo "Mr. ".$this->name."<br>";
echo "<p>Here is Your <b>Subject Status</b></p>";

for ($row = 0; $row < 3; $row++) {
  
  echo "<ul>";
  for ($col = 0; $col < 2; $col++) {
    echo "<li>".$this->cars[$row][$col]."</li>";
  }
  echo "</ul>";
}

	}

  


}
  $student1 = new student();
  $student1->print_name("Narayan");
  $student1->grade_profile("Math",80);
 
  $student1->grade_profile("Science",80);
    $student1->grade_profile("English",80);

$student1->show_result();

?>