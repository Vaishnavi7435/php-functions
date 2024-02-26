<?php
$fh = fopen('new_stud.txt', 'a');
fwrite($fh, '<h1>Hello world!</h1>');
fclose($fh);

echo unlink('new_stud.txt')?"File is unlinked":"File is not unlinked";
?>