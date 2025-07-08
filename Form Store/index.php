<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

</head>

<body>
    <form action="" method="post">
        ID: <input type="number" name="i"> <br><br>
        Name: <input type="text" name="n"> <br><br>
        Contact: <input type="text" name="c"> <br><br>
        Email: <input type="text" required name="e"> <br><br>
        Password: <input type="password" required name="p"> <br><br>
        Remarks: <input type="password" name="r"> <br> <br>
        <input type="submit" name="submit">
    </form>

    <?php
    require_once("form-class.php");
    
    if (isset($_POST["submit"])) {
        $id = $_POST['i'];
        $name = $_POST['n'];
        $contact = $_POST['c'];
        $email = $_POST['e'];
        $password = $_POST['p'];
        $remarks = $_POST['r'];



        echo "<h3>📤 Your data is loading...</h3>";
        echo "<p><strong>ID:</strong> $id <br>";
        echo "<strong>Name:</strong> $name <br>";
        echo "<strong>Contact:</strong> $contact <br>";
        echo "<strong>Email:</strong> $email <br>";
        echo "<strong>Password:</strong> $password <br>";
        echo "<strong>Remarks:</strong> $remarks </p>";

        // EMAIL VALIDATION 
    
        if ((preg_match("/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/", $email))) {
            echo " ✅ You Have Entered Valid Email: ", $email;
        } else {
            echo "❌ You Have Entered Invalid Email: ", $email;
        }

        //PASSWORD STRING LENGTH
    

        if (strlen($password) > 6) {
            echo "<p style='color:green'>Your password is <b>strong </b></p>";
        } else {
            echo "<p style='color:red'>Your password is weak.Please use more then 6 words</p>";
        }

        // data store in text file
        $data = new Form($id, $name, $contact, $email, $password, $remarks);
        $data -> data_save();
        echo "Form Submit Successfully";

    }
    ?>
</body>

</html>