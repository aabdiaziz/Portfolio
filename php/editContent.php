<?php

require 'aboutMe.php';



$db = new PDO('mysql:host=127.0.0.1;dbname=Portfolio','root');


?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Abdi's Portfolio</title>
    <link rel="stylesheet" type="text/css" href="editContent.css">
</head>
<body>
<div class="content">
    <h1>Edit About Me</h1>
    <form action="updateContent.php" method="post" class="formContent">
        Edit Title      <input type="text" name="title" class="titleContent" value="<?php echo $title; ?>"><br>
        Edit Content  <input type="text" name="content" class="aboutContent" value="<?php echo $content; ?>"><br>
        View how it looks:<input type="submit" class="updateBtn" value="Update">
        <br>
        <br>
        <br>
    </form>



</div>
</body>