<?php
$file="student_data.txt";
//adding new data to file.
$new_stud="Vaishnavi\n";
// Write contents to the file and return size  of file 
echo file_put_contents($file, $new_stud);

?>