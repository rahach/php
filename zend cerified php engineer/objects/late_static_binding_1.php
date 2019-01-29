<?php
class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who();
        static::who();   
        A::who();     
        B::who();             
    }
}

class B extends A {
    public static function who() {
         echo __CLASS__;
    }
}

B::test();
?>