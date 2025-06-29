<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trait example</title>
</head>

<body>
    <?php
    trait Fruits
    {
        public function fruits1()
        {
            echo "fruits are good for health";
        }
    }
    trait Flower
    {
        public function flower1()
        {
            echo "flowers are symbol of love";
        }
    }
    class Fruits2
    {
        use Fruits;
    }
    class flower
    {
        use Flower;
    }
    $obj = new Fruits2();
    $obj->fruits1();
    
    $obj2 = new flower();
    $obj2->flower1();
    $obj2->fruits1();
    ?>
</body>

</html>