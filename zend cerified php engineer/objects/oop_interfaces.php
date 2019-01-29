<?php

interface ifaceA{
    public static function getA();    
    public static function getB();        
}

interface ifaceB{
    public static function getA();    
    public static function getB();    
}


interface ifaces extends ifaceA, ifaceB{
    public static function getA();
    public static function getB();    
}


class A implements ifaces{
    public static function getA() { return "A"; }    

    public static function getB() { return "B"; }     
}


$a = new A();

echo $a::getA();
echo $a::getB();


?>