<?php

class BankBalance{
	private $balance;

	public $score = 10;

	public function __get($propertyName){
		if(property_exists($this, $propertyName)){
			return $this->$propertyName;
		}	
	}

	public function __set($propertyName, $value){
		if(property_exists($this, $propertyName)){		
			$this->$propertyName = $value;
		}	
	}

	public function __isset($propertyName){
		if(isset($this->$propertyName)){
			echo $propertyName . " exists\n";
		}else{
			echo $propertyName . " does not exist\n";
		}	
	}

	public function __unset($propertyName){
		unset($this->$propertyName);
	}

	public function __debugInfo(){
		return [
			'score' => $this->score
		];
	}


}


$newAccount = new BankBalance();

$newAccount->balance = 100;
var_dump($newAccount);
isset($newAccount->balance);
echo $newAccount->balance . "\n";

unset($newAccount->balance);
isset($newAccount->balance);

?>