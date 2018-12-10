<?php

function getDBconnection($dbname)
{
    // Creating a database connection
    $host = 'localhost'; // for C9
    $dbname = 'final';
    $username = 'root';
    $password = '';
    
    //checks whether the URL contains "herokuapp" (using Heroku)
    if(strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
       $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
       $host = $url["host"];
       $dbname = substr($url["path"], 1);
       $username = $url["user"];
       $password = $url["pass"];
    }
    // creates db connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // display errors when access tables
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $dbConn;
}
?>