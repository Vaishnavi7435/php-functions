<?php
//The array_filter() function filters the values of an array using a callback function.
function odd($var)
{
    return($var & 1);
}
$a= array(1,2,3,4,5,6,7,8,9,11,10);
//The array_filter() function filters the values of an array using a callback function.
print_r(array_filter($a, "odd"));
?>