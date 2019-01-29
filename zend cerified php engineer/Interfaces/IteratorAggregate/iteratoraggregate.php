<?php


class C implements IteratorAggregate, Countable{ 

	public $a = "Variable a"; 

	public $b = "Variable b"; 

	public $c = "Variable c"; 	

    protected $_myCount = 3; 


    public function getIterator() {
        return new ArrayIterator($this);
    }

    public function count()
    {
        return $this->_myCount;
    } 

}

$obj = new C();

$i = 0;

foreach ($obj as $key=>$value){

	$result = ($i !== count( $obj ) -1 ) ? $key . "=>" . $value . "\n" : $key . "=>" . $value; 		
	$i++;
	echo $result;

}




?>