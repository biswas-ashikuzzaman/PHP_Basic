<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construct</title>
</head>
<body>
    <?php
    class Student {
    public $name;

    public function __construct($n) {
        $this->name = $n;
        echo "Student name is: $n<br>";
    }
}

$std = new Student("Ashik");  // Output: Student name is: Ashik

    ?>
</body>
</html>