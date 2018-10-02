<?php



$name = $_POST['name'];
$newContent = $_POST['newContent'];

echo $name;

//function insertIntoDb($db){
//    $query = $db->prepare("INSERT INTO `about_content`(`title`,`content`) VALUE (:title,:content);");
//
//    $query->execute(['title'=>$name,'DOB'=>$dob,'gender'=>$gender]);
//}

