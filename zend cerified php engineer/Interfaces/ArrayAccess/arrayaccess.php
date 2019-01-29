<?php


class C implements ArrayAccess{ 

    private $container = array();

    public function __construct() { }


    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }


    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

}

$a = new C;

$a->offsetSet(null,1);

var_dump($a->offsetExists(0));

$a->offsetSet("two", "ghjgjgjhgjhg");

var_dump($a);

?>