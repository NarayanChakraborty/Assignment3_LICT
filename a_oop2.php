<?php

class college{

	  public $dept_name;
	  public $dept_student;

	  public function set_name($name)
	  {
	  	$this->dept_name=$name;
	  }
	  public function set_student($value)
	  {
	  	$this->dept_student=$value;
	  }

	    public function  get_name()
	  {
	  	echo $this->dept_name."<br>";
	  }
	  public function get_student()
	  {
	  	echo $this->dept_student."<br>";
	  }

}

class cste extends college{

	public $lab_no;

	public function set_lab($value)
	  {
	  	$this->lab_no=$value;
	  }

	    public function get_lab()
	  {
	  	echo $this->lab_no."<br>";
	  }
}

$abc=new cste;
$abc->set_name("CSTE");
$abc->set_student(500);
$abc->set_lab(2);
$abc->get_name();
$abc->get_student();
$abc->get_lab();