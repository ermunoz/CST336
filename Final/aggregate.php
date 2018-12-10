<?php
session_start();
include 'dbConnection.php';
$dbConn = getDBConnection('final');

function countEntry() 
{
    global $dbConn;
    $sql = "SELECT COUNT(ItemId) AS count FROM inventory";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    $records = $statement->fetch(PDO::FETCH_ASSOC);
    return $records;
}

function avgPrice() 
{
    global $dbConn;
    $sql = "SELECT ROUND(AVG(price)) AS price FROM inventory";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    $records = $statement->fetch(PDO::FETCH_ASSOC);
    return $records;
}

function totalPrice() 
{
    global $dbConn;
    $sql = "SELECT ROUND(SUM(price)) AS total FROM inventory";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    $records = $statement->fetch(PDO::FETCH_ASSOC);
    return $records;
}

function minPrice()
{
    global $dbConn;
    $sql = "SELECT ROUND(MIN(price)) AS min FROM inventory";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    $records = $statement->fetch(PDO::FETCH_ASSOC);
    return $records;
}

function maxPrice()
{
    global $dbConn;
    $sql = "SELECT ROUND(MAX(price)) AS max FROM inventory";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    $records = $statement->fetch(PDO::FETCH_ASSOC);
    return $records;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aggregate Report</title>
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/navbar.scss" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <a class="navbar-brand" href="#">International Soccer Jersey Shop</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="adminPage.php">Admin Home Page</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="addEntry.php">Add Items</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="adminLogin.html">Logout</a>
                  </li>
                </ul>
              </div>
            </nav>
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <h1>Aggregate Report</h1>
                    <hr />
                    <h4>Number of Entries in Database</h4>
                    <?php
                    $list = countEntry();
                    echo $list['count'];
                    ?>
                    <br>
                    <h4>Average Price of Inventory</h4>
                    <?php
                    $list = avgPrice();
                    echo "$".$list['price'];
                    ?>
                    <br>
                    <h4>Total Price of Inventory</h4>
                    <?php
                    $list = totalPrice();
                    echo "$".$list['total'];
                    ?>
                    <br>
                    <h4>Cheapest Item in Inventory</h4>
                    <?php
                    $list = minPrice();
                    echo "$".$list['min'];
                    ?>
                    <br>
                    <h4>Most Expensive Item in Inventory</h4>
                    <?php
                    $list = maxPrice();
                    echo "$".$list['max'];
                    ?>
                    <br>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
    <?php
        include 'footer.php';
    ?>
</html>