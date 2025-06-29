<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>

<form method="post">
    Enter a number: <input type="number" name="number" required>
    <input type="submit" value="Check Prime">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["number"];
    $isPrime = true;

    if ($num <= 1) {
        $isPrime = false;
    } else {
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }

    if ($isPrime) {
        echo "<h3>$num is a Prime Number.</h3>";
    } else {
        echo "<h3>$num is NOT a Prime Number.</h3>";
    }
}
?>

</body>
</html>
