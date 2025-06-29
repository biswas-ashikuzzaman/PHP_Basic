<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Set</title>
</head>
<body>
    <?php
    class Person {
    private $name;

    // Setter method
    public function setName($name) {
        $this->name = $name;
    }

    // Getter method
    public function getName() {
        return $this->name;
    }
}

    ?>
</body>
</html>