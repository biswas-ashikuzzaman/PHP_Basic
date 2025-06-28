<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Simple Registration Form</h2>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Age: <input type="number" name="age"><br><br>
    <input type="submit" name="submit" value="Register">
</form>

<?php
// isset() ব্যবহার করে চেক করছি submit বাটন ক্লিক হয়েছে কিনা
if (isset($_POST['submit'])) {

    // individual input গুলাও isset() দিয়ে চেক করা যায় (optional)
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['age'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        // এখন data display করা হচ্ছে
        echo "<h3>Registration Successful!</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Age: " . $age . "<br>";

    } else {
        echo "All fields are required!";
    }
}
?>
<br>
<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['age'])) {
        // কাজ করো
    } else {
        echo "Please fill all the fields!";
    }
}
?>


</body>
</html>
