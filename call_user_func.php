<?php 
function add($a,$b){
    return ($a+$b);
}
$addn=call_user_func('add',10, 20);
echo "The addition of two numbers is $addn";

?>