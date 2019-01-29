<?php
class Base {
    protected static function whoami() { 
        echo "Base ";
    }

    public static function whoareyou() { 
        static::whoami();
    }
}

class A extends Base { 
    public static function test() { 
        Base::whoareyou();
        self::whoareyou(); 
        parent::whoareyou();
        A::whoareyou(); 
        static::whoareyou();
        B::whoareyou();
    }

    public static function whoami() { 
        echo "A ";
    }
}

class B extends A {
    public static function whoami() { 
        echo "B ";
    }
}

B::test();
?>