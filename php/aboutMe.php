<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=Portfolio','root');
//fetching everything from database [about me section]

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
    $title = $results["title_of_content"];
    return $title;
}

$content =  fetchContent(fetchData($db));
$title = fetchTitle(fetchData($db));

//if(isset($results)){
//    function fetchContent(array $results):string{
//        return $results["content"];
//    }} else{
//    echo 'Error No data input';
//}







