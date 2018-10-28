<?php

function getDBconnection($dbname ='ottermart')
{
    // Creating a database connection
    $host = "localhost"; // for C9
    //$dbname = "ottermart";
    $username = "root";
    $password = "";
    
    // heroku db
    if (strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false)
    {
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $host = $url["us-cdbr-iron-east-01.cleardb.net"];
        $dbname = substr($url["heroku_2bcf65001ad0708"], 1);
        $username = $url["b6640a44a27287"];
        $password = $url["06a22714"];

    }
    // creates db connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // display errors when access tables
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $dbConn;
}
?>