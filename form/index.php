<?php
require_once("student.php");

if(isset($_POST["btnSubmit"])){

    $id=$_POST["txtid"];
    $name=$_POST["txtname"];

    $student = new Student($id, $name);
     $student->store();
     echo "Success!";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="txtid">ID:</label>
        <input type="text" name="txtid" id="txtid" required>
        <br>
        <label for="txtname">Name:</label>
        <input type="text" name="txtname" id="txtname" required>
        <br>
         <label for="txtaddress">add:</label>
        <input type="text" name="txtname" id="txtname" required>
        <br>
        <input type="submit" name="btnSubmit" value="Submit">
    </form>

   
</body>

</html>