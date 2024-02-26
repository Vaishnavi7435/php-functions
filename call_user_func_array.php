<?php
//add() is the user defined function
function add($a, $b){
    return $a+$b;
}
//here the values of $a and $b are passed in the form of array so are enclosed in "[]"
echo "Addition of two number is"." ". call_user_func_array('add', [10,22]);

//str_replace is in built function 
$function="str_replace";
$arr=array("Vaishnavi","Shruti","Give money to Vaishnavi");
echo "<br><br>". call_user_func_array($function,$arr);
?>

