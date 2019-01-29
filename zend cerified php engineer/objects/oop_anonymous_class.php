<?php


class SomeClass {}
interface SomeInterface {}
trait SomeTrait {}

$object = new class(10) extends SomeClass implements SomeInterface {
    private $num;

    public function __construct($num)
    {
        $this->num = $num;
    }

    use SomeTrait;
};

var_dump($object);


?>
