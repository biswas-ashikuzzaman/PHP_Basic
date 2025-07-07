<?php 
echo file_put_contents("data.txt", "Welcome to PHP File Handling!");
echo"<br";
$data="this is a test data";
echo $data;
echo "<br>";
print_r(explode(" ", $data ,2));