<?php
session_start();
if(!isset($_SESSION['db_email'])){
header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training</title>
</head>
<body>
    <div class="header">
   <h1>Fall News International</h1> 
   <p>CSCI426 - Saida Campus</p>
   </div>

   <div class="navbar">
    <a href="home.php" class="link">Home</a>
    <a href="logout.php" class="link">Logout</a>
   </div>

   <div class="newart">
   <a href="newArticle.php" class="addart">Add New Article</a>
   <p>In this selection you can add a new article</p>
   </div>

   <div class="manageart">
    <a href="manageArticle.php" class="manart">Manage Articles</a>
    <p>In this selection you can manage the article</p>
   </div>

   <style>
.header{
    text-align: center;
    background-color: hotpink;
    padding: 10px;
}
.navbar{
    background-color:palevioletred;
    padding: 8px;
}
.link{
    text-decoration: none;
    margin: 10px;
    color: black
}

.addart{
    text-decoration: none;
    color:hotpink;
    margin: 10px;
    margin-top: 10px;
    font-size: 20px;
}

.manart{
    text-decoration: none;
    color:hotpink;
    margin: 10px;
    font-size: 20px;
}
   </style>
</body>
</html>