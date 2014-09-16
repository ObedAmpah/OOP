<?php

//CREATING A CLASS
class Person {
	
	//CREATING PROPERTIES
	public $name;
	public $age;
	
	//CONSTRUCTOR FUNCTION (MAGIC METHOD) 
	public function __construct($name, $age) {
		
		//CREATING A PROPERTY 
		$this->name = $name;
		$this->age = $age;
	}
	
	//RETURN OUR DATA 
	public function sentence() {
		
		return $this->name . ' is ' . $this->age . ' years old.';
	}
}

?>