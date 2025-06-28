<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>! (not) is set</title>
</head>
<body>
   <?php
   if (!isset($name)) {
    echo "Variable is not set!";
} else {
    echo "Variable is set!";
}

   ?> 
   <br>
   <?php
   if (isset($_POST['submit'])) {

    if (!isset($_POST['name']) || !isset($_POST['email'])) {
        echo "Name and Email are required!";
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        echo "Welcome, $name";
    }

}

   ?>
</body>
</html>