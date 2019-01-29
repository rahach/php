<?php

class Employee{

	public $name;

	public function __construct($theName = "Max Mustermann"){
		$this->name = $theName;
	}

	public function calculateWage(float $hourlyRate, int $numHoursWorked){
		return $hourlyRate * $numHoursWorked;
	}
}


$theClass = new Employee;
echo $theClass->name . "\n";
echo $theClass->calculateWage(60.0,8) . "\n";

class NewEmployee extends Employee{

	public function calculateWage(float $hourlyRate, int $numHoursWorked){
		return ($hourlyRate+10.00) * $numHoursWorked;		
	}
}

$theClass = new NewEmployee("Erwin Lottermann");
echo $theClass->name . "\n";
echo $theClass->calculateWage(60.0,8);

?>