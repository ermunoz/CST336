<?php

include '../../inc/dbConnection.php';
$dbConn = getDBconnection("ottermart");

function displayCategories()
{
    global $dbConn;
    
    $sql = "SELECT * FROM om_category ORDER BY catName";
    $statement = $dbConn -> prepare($sql);
    $statement -> execute();
    $records = $statement -> fetchAll();
    
    foreach ($records as $record)
    {
        echo "<a href=\"purchaseHistory.php?productId=".$record["productId"]. "\"> History </a>";
        echo $record["productName"] . " " , $record["productDescription"] . " $" . $record["price"] . "<br /><br />";
        
        echo "<option value='". $record['catId'] ."'>" . $record['catName'] . "</option>";
    }
}

function filterProducts()
{
    global $dbConn;
    $product = $_GET['productName'];
    
    // SQL shit
    // works but VULNERABLE to SQL INJECTION because of ' '
    // $sql = "SELECT * FROM om_product WHERE productName LIKE '%$productName%'";
    
    // SQL shit that PROTECTS query from SQL INJECTION
    $sql = "SELECT * FROM om_product WHERE productName LIKE .product";
    
    $namedParamters = array();
    $namedParamters['.product'] = "%$products%";
    
    $statement = $dbConn -> prepare($sql);
    $statement -> execute($namedParamters);
    $records = $statement -> fetchAll(PDO.FETCH_ASSOC);
    print_r($records);
    
}

function displaySearchResults()
{
    global $dbConn;
    
    if (isset($_GET['searchForm']))
    {
        // checks is user has subbmitted form
        echo"<h3>Products Found: </h3>";
        $namedParamters = array();
        
        $sql = "SELECT * FROM om_product WHERE 1";
        
        if (!empty($_GET['product']))
        {
            // checks if user has typed something in product text box
            $sql .= " AND productName LIKE :productName";
            $namedParamters[":productName"] = "%" . $_GET['product'] . "%";
        }
        
        if (!empty($_GET['category']))
        {
            // checks if user has selected a category
            $sql .= " AND catId = :catId";
            $namedParamters[":catId"] = $_GET['category'];
        }
        
        if (!empty($_GET['priceFrom']))
        {
            // checks if user has typed somethihg in price from text box
            $sql .= " AND price >= :priceFrom";
            $namedParamters[":priceFrom"] = $_GET['priceFrom'];
        }
        
        if (!empty($_GET['priceTo']))
        {
            // checks is user has typed something in price to text box
            $sql .= " AND price <= :priceTo";
            $namedParamters[":priceTo"] = $_GET['priceTo'];
        }
        
        if (isset($_GET['orderBy']))
        {
            if ($_GET['orderBy'] == "price")
            {
                $sql .= " ORDER BY price";
            }
            else
            {
                $sql .= " ORDER BY productName";
            }
        }
        
        
        $statement = $dbConn->prepare($sql);
        $statement->execute($namedParamters);
        $records = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($records as $record)
        {
            echo "<a href=\"purchaseHistory.php?productId=".$record["productId"]. "\"> History </a>";
            echo $record["productName"] . " " . $record["productDescription"] . " $" . $record["price"] . "<br /><br />";
        }
    }
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lab 6: OtterMart Product Search</title>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
    </head>
    <body>
        <div>
            <h1>OtterMart Product Search</h1>
            <form>
                Product: <input type="text" name="product"/>
                <br>
                Category:
                    <select name="category">
                        <option value="">Select One</option>
                        <?=displayCategories()?>
                    </select>
                <br>
                Price: From <input type="text" name="priceFrom" size="7"/>
                        To <input type="text" name="priceTo" size="7"/>
                <br>
                Order results by:
                <br>
                
                <input type="radio" name="orderBy" value="price"/> Price <br>
                <input type="radio" name="orderBy" value="name"/> Name
                <br><br>
                <input type="submit" value="Search" name="searchForm"/>
            </form>
            <br>
        </div>
        <hr>
        <?= displaySearchResults() ?>
    </body>
</html>