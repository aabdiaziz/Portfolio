<?php

require 'aboutMe.php';

$name = $_POST['title'];
$newContent = $_POST['content'];


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
    <div class="currentState">
        <h1>Current State <br><?php echo $title; ?></h1>
        <p><?php echo $content; ?></p>
    </div>

    <form action="#" method="post" class="formContent">
        Edit Title      <input type="text" name="title" class="titleContent"><br>
        Edit Content  <input type="text" name="content" class="aboutContent"><br>
        View how it looks:<input type="submit">
        <br>
        <br>
        <br>
    </form>

    <div class="view">
        <h1>Viewing State <br></h1>
        <?php
        echo 'title:   '.$name;
        echo '<br>';
        echo 'content:   '.$newContent;
        ?>
    </div>

    <input type="submit" class="updateBtn" value="Update">

</div>
</body>