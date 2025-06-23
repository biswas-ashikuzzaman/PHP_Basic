<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous function</title>
</head>
<body>
    <?php
$add = function($a, $b) {
    return $a + $b;
};

echo $add(10, 5); // Output: 15
?>

</body>

</html>