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

   <div class="arttable">
   <form action="newArticleAction.php" method="post">
  <div class="row">
    <div class="col-25">
      <label for="title">Title</label>
    </div>
    
    <div class="col-75">
      <input type="text" id="title" name="txtTitle" placeholder="Article Title...">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="author">Author</label>
    </div>

    <div class="col-75">
      <input type="text" id="author" name="txtAuthor" placeholder="Article Author..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="source">Source</label>
    </div>
    <div class="col-75">
      <select name="txtSource">
<?php
include "inc/connection.php";
 $sql = "SELECT * FROM source";
 $result = mysqli_query($con,$sql);
 while($row=mysqli_fetch_assoc($result)){
echo"<option>".$row['db_source']."</option>";
 }
?>
</select>
</div>
    <div class="row">
    <div class="col-25">
      <label for="date">Date</label>
    </div>
    <div class="col-75">
      <input type="date" id="date" name="txtDate"</input>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
   </div>
   <style>
.header {
    text-align: center;
    background-color: hotpink;
    padding: 20px;
    color: white;
    font-family: Arial, sans-serif;
}


.navbar {
    background-color: palevioletred;
    padding: 10px;
    display: flex;
    justify-content: center;
    gap: 20px;
}

.link {
    text-decoration: none;
    color: black;
    font-size: 16px;
    font-weight: bold;
}

.addart, .manart {
    text-decoration: none;
    color: hotpink;
    font-size: 18px;
    font-weight: bold;
}

.arttable {
    margin: 20px auto;
    width: 50%;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.row {
    display: flex;
    flex-direction: column;
    margin-bottom: 15px;
}

.col-25 {
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 5px;
}

.col-75 {
    width: 100%;
}

input[type="text"], 
input[type="date"], 
select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: hotpink;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
}

input[type="submit"]:hover {
    background-color: deeppink;
}

/* Paragraph Styling */
.newart p, 
.manageart p {
    color: gray;
    font-size: 14px;
}
</style>
</body>
</html>