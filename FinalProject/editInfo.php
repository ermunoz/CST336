<?php
session_start();
include 'dbConnection.php';
$dbConn = getDBConnection('final');

function inventory() 
{
    global $dbConn;
    $sql = "SELECT * FROM inventory WHERE ItemId = " . $_GET['ItemId'];
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    $records = $statement->fetch(PDO::FETCH_ASSOC);
    return $records;
}

function federation() 
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

//click button to update information
if (isset($_GET['updateInfo'])) 
{
    $ItemId = $_GET['ItemId'];
    $ItemName = $_GET['ItemName'];
    $brand = $_GET['brandName'];
    
    //Need these to convert the Name into a number to insert into table properly (Changes the name back to number)
    $fedId = $_GET['fedId'];
    $sql = "SELECT * FROM federation ORDER BY fedId ASC";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($records as $record) 
    {
        if ($fedId == $record['federaionName'])
        {
            $fedId = $record['fedId'];
        }
    }
    
    $brandId = $_GET['brandId'];
    $sql = "SELECT * FROM brand ORDER BY brand.brandId ASC ";
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
    
    $sql = "UPDATE inventory
            SET ItemName = :iName,
                fedId = :cId,
                brandId = :bId,
                priceId = :pId,
            WHERE ItemId = :id";
            
    $namedParameters = array();
    $namedParameters[':iName'] = $ItemName;
    $namedParameters[':cId'] = $fedId;
    $namedParameters[':bId'] = $brandId;
    $namedParameters[':pId'] = $priceId;
    $namedParameters['id'] = $ItemId;
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Edit Page</title>
        
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
                    <h1>Edit Entry</h1>
                    <hr />
                    <form>
                        <?php
                            $list = inventory();
                        ?>
                        <input type="hidden" name="ItemId" value="<?=$list['ItemId']?>" />
                        Item Name: <input type="text" name="ItemName" id="ItemName" value="<?php echo ucfirst($list['ItemName']); ?>" /> <br>
                        Item Price: <input type="text" name="priceId" id="priceId" value="<?php echo ucfirst($list['priceId']); ?>" /> <br>
        
                        <?php 
                            //Get component name that the item is already under
                            $fedid = $list['fedId'];
                            $sql = "SELECT federationName FROM federation WHERE fedId = '$fedid'";
                            $stmt = $dbConn->query($sql);	
                            $federname = $stmt->fetchAll();
                            
                            //Get brand name that the item is listed under
                            $brandid = $list['brandId'];
                            $sql = "SELECT brandName FROM brand WHERE brandId = '$brandid'";
                            $stmt = $dbConn->query($sql);	
                            $brandname = $stmt->fetchAll();
                        ?>
                        
                        Federation: <select name="fedId" id="fedId">
                            <option>
                                <?php  
                                    foreach ($federname as $fedName) 
                                    {
                        	            echo ucfirst($fedName['fedName']);
                                    }
                                ?>
                            </option>
                            <?=federation()?>
                        </select>
                        <br>
                        Brand: <select name="brandId" id="brandId">
                            <option>
                                 <?php  foreach ($brandname as $brand) 
                                        {
                        	                echo ucfirst($brand['brandId']);
                                        }
                                    ?>
                            </option>
                                <?=brands()?>
                        </select>
                        <br>
                        <input type="submit"  name="updateInfo" value="Change Information">
                    </form>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>