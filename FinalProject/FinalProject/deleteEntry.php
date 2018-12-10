<?php
    // doesnt prompt user, just auto deletes so be careful
    include 'dbConnection.php';
    $dbConn = getDBConnection();
    $sql = "DELETE FROM inventory
            WHERE ItemId = " . $_GET['ItemId'];
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    
    header("Location: adminPage.php");
    break;
?>