<?php

//define('MIN_VALUE', '0.0');   // RIGHT - Works OUTSIDE of a class definition.
//define('MAX_VALUE', '1.0');   // RIGHT - Works OUTSIDE of a class definition.

//const MIN_VALUE = 0.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.
//const MAX_VALUE = 1.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.

class Constants
{
  //define('MIN_VALUE', '0.0');  WRONG - Works OUTSIDE of a class definition.
  //define('MAX_VALUE', '1.0');  WRONG - Works OUTSIDE of a class definition.

  const MIN_VALUE = 0.0;      // RIGHT - Works INSIDE of a class definition.
//  const MIN_VALUE;      // WRONG constants must be initialized  
  const MAX_VALUE = 1.0;      // RIGHT - Works INSIDE of a class definition.

  public static function getMinValue()
  {
    return self::MIN_VALUE;
  }

  public static function getMaxValue()
  {
    return self::MAX_VALUE;
  }
}



//Example 1:
//You can access these constants DIRECTLY like so:
// type the class name exactly.
// type two (2) colons.
// type the const name exactly.

//Example 2:
//Because our class definition provides two (2) static functions, you can also access them like so:
// type the class name exactly.
// type two (2) colons.
// type the function name exactly (with the parentheses).




//Example 1:
$min = Constants::MIN_VALUE;
$max = Constants::MAX_VALUE;


//Example 2:
//$min = Constants::getMinValue();
//$max = Constants::getMaxValue();


var_dump($min);
var_dump($max);


?> 
