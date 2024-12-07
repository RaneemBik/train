<?php
session_start();
include "inc/connection.php";
$email=$_POST['txtEmail'];
$password=$_POST['txtPassword'];

$sql="SELECT * FROM users WHERE db_email='$email' AND db_password='$password'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)){
    $_SESSION['db_email']=$email;
    header("location:home.php");
}
else{
    header("location:login.php");
}

?>