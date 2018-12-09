<?php
session_start();
include 'dbConnection.php';
$dbConn = getDBConnection('final');

// Get inventory to display
function initialDisplay() 
{
    global $dbConn;
    $sql = "SELECT * FROM inventory ORDER BY inventory.ItemName ASC ";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $records;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Page</title>
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/navbar.scss" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            <!-- Sidebar -->
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
                    <a class="nav-link" href="addEntry.php">Add Items</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="aggregate.php">Aggregate Report</a>
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
                    <h1>Admin Page</h1>
                    <hr />
                    <?php
                    $list = initialDisplay();
                    
                    foreach($list as $product) 
                    {
                        echo "<h4> " .$product['ItemName']. "</h4>";
                        echo "<h5> " .$product['federationName']. "</h5>";
                        echo "<h6> " .$product['brandName']. "</h6>";
                        echo "Price: $".$product['price'];
                        echo "<br>";
                        echo "<a href='editInfo.php?ItemId=".$product['ItemId']."'> Edit Entry </a>";
                        echo "<br>";
                        echo "<a href='deleteEntry.php?ItemId=".$product['ItemId']."'> Delete Entry </a>";
                        echo "<br>";
                        echo "<br>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
