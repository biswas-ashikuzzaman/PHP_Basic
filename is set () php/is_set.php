<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset()</title>
</head>
<body>
    <?php 
    $name="Ashikuzzaman Biswas";
    if(isset($name)) {
        echo "name is set"; // output name is set
    } else {
        echo "name is not set";
    }
    ?>
    <br>
    <?php 
    $country=null;
    if(isset($country)) {
        echo "country is set!";
    } else {
        echo "country is not set!";
    }
    ?>
    <br>
    <?php
    if(isset($district)) {
        echo "District is set!";
    }
    else {
        echo "District is not set!";
    }
    ?>
</body>
</html>