<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // main.php
require 'file1.php';
require 'file2.php';

$obj1 = new \Project1\Helper();
$obj1->help();  // Output: Helping from Project1

$obj2 = new \Project2\Helper();
$obj2->help();  // Output: Helping from Project2

    ?>
</body>
</html>