<?php
include "inc/connection.php";
$artID=$_GET['ID'];
$sql="DELETE FROM training WHERE id=$artID";
mysqli_query($con,$sql);
header("location:manageArticle.php");
?>