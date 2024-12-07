<?php
include "inc/connection.php";
$artID=$_GET['ID'];
$sql="SELECT*FROM training WHERE id='$artID'";

$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    echo "
    <h2>".$row['db_title']."</h2>
    <h2>".$row['db_author']."</h2>
    <h2>".$row['db_source']."</h2>
    <h2>".$row['db_date']."</h2>
    <h2><a href=delete.php?ID=".$row['id'].">Delete</a></h2>
    ";
}
?>