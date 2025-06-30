<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>
<body>
    <form action="submit.php" method="post">
  Name: <input type="text" name="username"><br>
  Email: <input type="email" name="email"><br>
  <input type="submit" value="Submit">
</form>
<?php
$name = $_POST['username'];
$email = $_POST['email'];

echo "Welcome, $name!<br>";
echo "Your email is: $email";
?>

</body>
</html>