<?php 
if (isset($_POST['btnlogin'])){
    $username=$_POST['txtUsername'];
    $password=$_POST["txtPassword"];
    $file=file("data.txt");
}
foreach($file as $line){
    list($_username,$_password)=explode(",",$line);
    if($_username=$username && $_password=$password){
        header("location:demo.php");
    } else{
        $message="Username or Password is not match";
    }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
 <?php
   echo isset($msg)?$msg:"";
 ?>
 <form action="#" method="post">
   <div>
    Username<br/>
    <input type="text" name="txtUsername" />
   </div>
   <div>
    Password<br/>
    <input type="password" name="txtPassword" />
   </div>
   <div>
    <input type="submit" value="Log In" name="btnLogin" />
   </div>
 </form>
</body>
</html>