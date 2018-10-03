<?php


/**
 * This function standardises db connection for the whole architecture
 *
 * @return PDO PDO returns a new object of the my "Portfolio" Database
 */
function dbConn(){
    return new PDO('mysql:host=127.0.0.1;dbname=Portfolio','root');
}

