<?php

/*
* This Function Fetches Data from the database and returns the query as an associative array.
*
* @param PDO $db is to input the new instance of my database.
*
* @return array $results which contains an ASSOC array of query.
*
*/
function fetchData(PDO $db):array {

    $query = $db->prepare("SELECT `content`,`title_of_content` FROM `about_content`;");

    $query->setFetchMode(PDO::FETCH_ASSOC);

    $query->execute();
    $results = $query->fetch();
    return $results;
}

/*
* This Function takes the results and outputs the content field in the database.
*
* @param array $results is a ASSOC array Which is returned by the function fetchData.
*
* @return string $results['key'] in this format the function returns a string inside the ASSOC array when they Key is inputted.
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
* @param array $results is a ASSOC array Which is returned by the function fetchData.
*
*
* @return string $results['key'] in this format the function returns a string inside the ASSOC array when they Key is inputted.
*
*/

function fetchTitle(array $results):string {
    if(array_key_exists('title_of_content', $results)){
        return $results["title_of_content"];
    } else {
        return 'error';
    }
}