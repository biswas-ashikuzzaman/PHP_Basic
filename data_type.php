<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Type</title>
</head>
<body>
    <?php
    $name="zaman";  //string
    var_dump ($name);
    echo "<br>";
    $number=3090;   //integer
    var_dump($number);
    echo "<br>";
    $boolean=true;  //boolean
    var_dump($boolean);
    echo "<br>";
    $Array=array("ashik","zaman","biswas",13,56.7);   //array
    var_dump($Array);
    echo "<br>";
    class student {
        public $nam;
        public $ag;
        public function __construct($nam,$ag) {
            $this->nam=$nam;
            $this->ag=$ag;        }
    }
    $obj=new student("ashik",25);
    $obj1=new student("mahidul",27);
    var_dump ($obj);
    var_dump ($obj1);
    echo "<br>";


    class car {
        public $model; 
        public $brand;
        public function __construct($brand,$model) {
            $this->brand=$brand;
            $this->model=$model;
        }
        
    }
    $car1= new car("Toyato","Premio");
    var_dump($car1);
    
    ?>
</body>
</html>