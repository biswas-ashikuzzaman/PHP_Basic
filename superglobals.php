<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super_Globals</title>
</head>
<body>
    <form method="POST">
  <input type="text" name="username">
  <input type="submit">
</form>

<?php
echo $_POST['username'];
?>
echo "<br>"
<!-- URL: example.com?name=Ashik -->
<?php
echo $_GET['name']; // Output: Ashik
?>

</body>
</html>