<?php 
$file = fopen("data.txt", "w");
fwrite($file, "Welcome to PHP File Handling!");
fclose($file);

?>