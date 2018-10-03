<?php

require_once 'dbConn.php';

$db = dbConn();



    /*
    * This Function Updates given fields into the database.
    *
    * @param PDO $db is to input the new instance of PDO database.
    * @param string $title contains the value of title to be inputted, which is interpreted by POST resquest.
    * @param string $content contains the content to be inputted.
    *
    * @return boolean $query 1 (true) which tells me that the query has been executed.
    * @return string 'ERROR' This is an alternative return value if the input is incorrect, it will return an error message.
    */
if (is_string($content) AND is_string($title)){
    function insertIntoDb($db,$title,$content){
        $query = $db->prepare("UPDATE `about_content` SET `title_of_content`=:title, `content`=:content WHERE `about_content`.`id` = '1';");

        $query->execute(['title'=>$title,'content'=>$content]);

        return $query->execute();
    }

} else {
    echo 'Error Please Enter A string Input';
}

