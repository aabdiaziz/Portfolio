<?php

require_once 'dbConn.php';
require_once 'aboutMeFunctions.php';

$db = dbConn();
//fetching everything from database [about me section]
$content =  fetchContent(fetchData($db));
$title = fetchTitle(fetchData($db));








