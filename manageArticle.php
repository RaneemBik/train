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
   <div class="column1">
          <h2>Manage News Articles</h2>
          <table id="customers">
          <tr>
    <th>Title</th>
    <th>Author</th>
    <th>Source</th>
    <th>Date</th>
    <th>Delete</th>
  </tr>
<?php
include "inc/connection.php";
$sql = "SELECT * FROM training";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    echo "<tr>
<td><a href=artDetaile.php?ID=".$row['id'].">".$row['db_title']."</td> 
<td>".$row['db_author']."</td> 
<td>".$row['db_source']."</td> 
<td>".$row['db_date']."</td> 
<td><a href=delete.php?ID=".$row['id'].">Delete</a></td>
";
}
?>
</table>
   <style>
        .header {
            text-align: center;
            background-color: hotpink;
            padding: 10px;
        }

        .navbar {
            background-color: palevioletred;
            padding: 8px;
        }

        .link {
            text-decoration: none;
            margin: 10px;
            color: black;
        }

        .addart, .manart {
            text-decoration: none;
            color: hotpink;
            margin: 10px;
            font-size: 20px;
        }

        .column1 {
            margin: 20px auto;
            padding: 10px;
        }

        #customers {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        #customers th {
            background-color: hotpink;
            color: white;
            text-align: left;
            padding: 8px;
        }

        #customers td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        #customers tr:hover {
            background-color: #f1f1f1;
        }

        #customers th, #customers td {
            text-align: left;
        }

        #customers td a {
            color: red;
            text-decoration: none;
            font-weight: bold;
        }

        #customers td a:hover {
            text-decoration: underline;
        }
   </style>
</body>
</html>