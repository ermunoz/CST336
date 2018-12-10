<?php
session_start();

include 'dbConnection.php';
$dbConn = getDBConnection('final');

//$username = "test";
//$password = sha1("2test");
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$namedParameters = array();
$namedParameters[':username'] = "$username";
$namedParameters[':password'] = "$password";        

$stmt = $dbConn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC);

if (empty($record)) 
{
    echo "Wrong username or password";
} 
else 
{
   print "success";
}
?>