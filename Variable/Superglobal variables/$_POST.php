<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <form method="post">
  <input type="email" name="email">
  <button type="submit">Save</button>
</form>
<?php
// save.php
$email = $_POST['email'] ?? '';
echo "Your email: " . htmlspecialchars($email);
?>

</body>
</html>