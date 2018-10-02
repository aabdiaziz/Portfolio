<?php


/**
 * This function standardises db connection for the whole architecture
 *
 * @return PDO
 */
function dbConn(){
    return new PDO('mysql:host=127.0.0.1;dbname=Portfolio','root');
}

