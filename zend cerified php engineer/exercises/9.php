<?php
$arr1 = [1,2,3];
$arr2 = array(2, 1,3 );
$equal = $arr1 == $arr2 ? 'Equal' : 'Not Equal';
$identical = $arr1 === $arr2 ? 'Identical' : 'Not Identical';
echo "The arrays are [$equal] and [$identical]";

?>