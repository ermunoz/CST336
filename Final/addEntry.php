<?php
session_start();
include 'dbConnection.php';
$dbConn = getDBConnection('final');

// display functions
function brands() 
{
    global $dbConn;
    $sql = "SELECT brandName FROM brand";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record) 
    {
        echo "<option> " . $record['brandName'] . "</option>";
    }
}

function federations() 
{
    global $dbConn;
    $sql = "SELECT federationName FROM federation";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record) 
    {
        echo "<option> " . $record['federationName'] . "</option>";
    }
}

// adds items to their respective tables
// federation
if (isset($_GET['addFed']))
{
    $fedName = $_GET['fedName'];
    $sql = "INSERT INTO federation
            (federationName)
            VALUES
            (:federation)";
    
    $namedParameters = array();
    $namedParameters[':federation'] = $fedName;
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);
}

// brand
if (isset($_GET['addBrand'])) 
{
    $brandName = $_GET['brandName'];
    $sql = "INSERT INTO brand
            (brandName)
            VALUES
            (:brand)";
    
    $namedParameters = array();
    $namedParameters[':brand'] = $brandName;
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);
}

// inventory
if (isset($_GET['addItem'])) 
{
    // adds items name
    $ItemName = $_GET['ItemName'];
    
    // adds items federation
    $fedId = $_GET['fedId'];
    $sql = "SELECT * FROM federation ORDER BY fedId ASC";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record) 
    {
        if ($fedId == $record['fedName']) 
        {
            $fedId = $record['fedId'];
        }
    }
    
    // adds items brand
    $brandId = $_GET['brandId'];
    $sql = "SELECT * FROM brand ORDER BY brand.brandId ASC";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    foreach ($records as $record)
    {
        if ($brandId == $record['brandName']) 
        {
            $brandId = $record['brandId'];
        }
    }
    
    // adds items price
    $price = $_GET['price'];
    
    $sql = "INSERT INTO inventory
            (ItemName, fedId, brandId, price)
            VALUES
            (:iName, :fId, :bId, :pId)";
    
    $namedParameters = array();
    $namedParameters[':iName'] = $ItemName;
    $namedParameters[':fId'] = $fedId;
    $namedParameters[':bId'] = $brandId;
    $namedParameters[':pId'] = $price;
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <meta charset="utf-8">
        <title>Add Item</title>
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
                    <h1>Add Entires</h1>
                    <hr />
                    <form>
                        <!-- Adding custom federaions/brands to their table -->
                        <h5>Add a Federation to federation table: </h5>
                        <input type="text" name="fedName" id="fedName"> <br> 
                        <input type="submit" name="addFed" value="Add Federation"> <br>   
                        <br>
                        <h5>Add a Brand to brand table: </h5>
                        <input type="text" name="brandName" id="brandName"> <br> 
                        <input type="submit" name="addBrand" value="Add brand"> <br>
                        <br>
                        <!-- JUST ITEM in INVENTORY, NOT adding CUSTOM federation/brand -->
                        <h5>Add new item to inventory </h5>
                        Item Name: <input type="text" name="ItemName" id="ItemName"> <br>
                        
                        Federation: 
                        <select name="fedId" id="fedId">
                            <option>Select Federation</option>
                                <?=federations()?>
                        </select> <br>
                        Brand: 
                        <select name="brandId" id="brandId">
                            <option>Select Brand</option>
                                <?=brands()?>
                        </select> <br>
                        Price: <input type="text" name="price" id"price"> <br>
                        <input type="submit" name="addItem" value="Add Item"> <br>
                    </form>
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