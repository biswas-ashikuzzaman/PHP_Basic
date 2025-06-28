<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real life Project</title>
</head>
<body>
    <?php
    class FileHandler {
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
        echo "Opening file: $filename<br>";
    }

    public function __destruct() {
        echo "Closing file: $this->filename<br>";
    }
}

$file = new FileHandler("data.txt");

    ?>
</body>
</html>