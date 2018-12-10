<?php
session_start();
include 'dbConnection.php';
$dbConn = getDBconnection("final");

// sorting options
function orderPrice($order) 
{
    global $dbConn;
    
    if($order == "cheap") 
    {
        $sql = "SELECT * FROM inventory ORDER BY price ASC";    
    }
    elseif ($order =="expensive")
    {
        $sql = "SELECT * FROM inventory ORDER BY price DESC";
    }
    elseif($order == "az")
    {
        $sql = "SELECT * FROM inventory ORDER BY ItemName ASC";
    }
    
    elseif($order == "za")
    {
        $sql = "SELECT * FROM inventory ORDER BY ItemName DESC";
    }
    
    elseif($order == "fed")
    {
        $sql = "SELECT * FROM inventory ORDER BY federationName ASC";
    }
    
    elseif($order == "brand")
    {
        $sql = "SELECT * FROM inventory ORDER BY brandName ASC";
    }
    
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $records;
}
// default sort
function initialDisplay() 
{
    global $dbConn;
    $sql = "SELECT * FROM inventory ORDER BY ItemName ASC";
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
        <title>Final Project</title>
    
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
                <a class="nav-link" href="adminLogin.html">Login</a>
              </li>
            </ul>
          </div>
        </nav>
                <div class="container-fluid">
                    <h1>International Soccer Jersey Shop</h1>
                    <h3>Sorting Options</h3>
                    <form action='index.php' style='display:inline' method="get">
                        <input type="radio" id="low" name="orderBy" value="cheap">
                        <label for="cheap">Cheapest</label>
                        
                        <input type="radio" id="high" name="orderBy" value="expensive">
                        <label for="expensive">Expensive</label>
                        
                        <input type="radio" id="alpha" name="orderBy" value="az">
                        <label for="az">A-Z</label>
                        
                        <input type="radio" id="backward" name="orderBy" value="za">
                        <label for="za">Z-A</label>
                        
                        <input type="radio" id="fed" name="orderBy" value="fed">
                        <label for="fed">Federation</label>
                        
                        <input type="radio" id="brand" name="orderBy" value="brand">
                        <label for="brand">Brand</label>
                        
                        <input type="submit" name="price" value="Sort" />
                        <br>
                    </form>
                    <hr />
                    <?php
                        // sorting by price
                        $order = $_GET['orderBy'];
                        if(isset($_GET['price'])) 
                        {
                            $list = orderPrice($order);
                        }
                        else 
                        {
                            $list = initialDisplay();   
                        }
    
                        foreach($list as $product) 
                        {
                            echo "<h4> " .$product['ItemName']. "</h4>";
                            echo "<h5> " .$product['federationName']. "</h5>";
                            echo "<h6> " .$product['brandName']. "</h6>";
                            echo "price: $".$product['price'];
                            echo "<br /> <br />";
                        }
                    ?>
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
