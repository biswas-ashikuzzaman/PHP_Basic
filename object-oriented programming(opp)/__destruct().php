<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>__destruct()</title>
</head>
<body>
    <?php
    class Demo {
    public function __construct() {
        echo "Constructor is called<br>";
    }

    public function __destruct() {
        echo "Destructor is called<br>";
    }
}

$obj = new Demo();

// স্ক্রিপ্ট শেষ হলে Destructor অটোমেটিক চালু হবে
?>

</body>
</html>