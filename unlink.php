<?php
$fh = fopen('student_data.txt', 'a');
fwrite($fh, '<h1>Hello world!</h1>');
fclose($fh);

echo unlink('student_data.txt')?"File is unlinked":"File is not unlinked";
?>