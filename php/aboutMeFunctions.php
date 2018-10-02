<?php

/*
* This Function Fetches Data from the database and returns the query as an associative array.
*
* @param the $db is to input the new instance of PDO database.
*
*
* @return Assoc array which contains results.
*
*/
function fetchData($db) {

    $query = $db->prepare("SELECT `content`,`title_of_content` FROM `about_content`;");

    $query->setFetchMode(PDO::FETCH_ASSOC);

    $query->execute();
    $results = $query->fetch();
    return $results;
}

/*
* This Function takes the results and outputs the content field in the database.
*
* @param the Parameter it takes will be $results from before.
*
*
* @return returns the value in a string format.
*
*/

function fetchContent(array $results):string{
    if(array_key_exists('content', $results)){
        return $results["content"];
    } else {
        return 'error';
    }
}
/*
* This Function takes the results and outputs the title field in the database.
*
* @param the Parameter it takes will be $results from before.
*
*
* @return returns the value in a string format.
*
*/

function fetchTitle(array $results):string {
    if(array_key_exists('title_of_content', $results)){
        return $results["title_of_content"];
    } else {
        return 'error';
    }
}