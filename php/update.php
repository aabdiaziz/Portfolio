<?php
require_once 'updateFunctions.php';
require_once 'dbConn.php';

$db = dbConn();

$title = $_POST['title'];
$content = $_POST['content'];

insertIntoDb($db,$title,$content);

header('Location: editContent.php');