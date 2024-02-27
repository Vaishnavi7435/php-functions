<?php
$file="student_data.txt";
//is_file(); function checks the file is exist or not if it is then it will return true otherwise false
if(is_file($file)){
echo("$file is a regular file");
}
else{
echo("$file is not a regular file");
}
?>