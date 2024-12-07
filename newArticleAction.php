<?php
include "inc/connection.php";

$title=$_POST['txtTitle'];
$author=$_POST['txtAuthor'];
$source=$_POST['txtSource'];
$date=$_POST['txtDate'];

$sql= "INSERT INTO training (db_title,db_author,db_source,db_date) VALUES('$title','$author','$source','$date')";
mysqli_query($con,$sql);
header("location:newArticle.php");
?>