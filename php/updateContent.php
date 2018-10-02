<?php

require_once 'dbConn.php';

$db = dbConn();



    /*
    * This Function Updates given fields into the database.
    *
    * @param the $db is to input the new instance of PDO database.
    * @param the $title contains the value of title to be inputted.
    * @param the $content contains the content to be inputted.
    *
    * @return Assoc array which contains results.
    *
    */
function insertIntoDb($db,$title,$content){
    $query = $db->prepare("UPDATE `about_content` SET `title_of_content`=:title, `content`=:content WHERE `about_content`.`id` = '21';");

    $query->execute(['title'=>$title,'content'=>$content]);

    return $query->execute();
}



