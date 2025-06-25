<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <?php
    $student= array(
        "name"=> "Ashikuzzaman Biswas",
        "id" => 1288603,
        "dept" => "Agriculture",
    );
    echo $student ["name"] . "-" .$student["dept"];
    ?>
</body>
</html>