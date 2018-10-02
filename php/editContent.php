<?php

require_once 'aboutMe.php';

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
    <form action="update.php" method="post" class="formContent">
        Edit Title:<input type="text" name="title" class="titleContent" value="<?php echo $title; ?>">
        <br>
        <br>
        Edit Content:  <input type="text" name="content" class="aboutContent" value="<?php echo $content; ?>"><br>
        View how it looks:<input type="submit" class="updateBtn" value="Update">
        <br>
        <br>
        <br>
    </form>



</div>
</body>
</html>