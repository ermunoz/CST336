<? php
    $backgroundImage = "img/sea.jpg";
    // API goes here
    if (isset($_GET['keyword']))
    {
        //echo "You searched for: " . $_GET['keyword'];
        include 'api/pixabayAPI.php';
        $imageURLs = getImageURLs($_GET['keyword']);
        //print_r($imageURLs);
        $backgroundImage = $imageURLs[array_rand($imageURLs)];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="urf-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></link>
        <title>Image Carousel</title>
        <style>
            @import url("css/styles.css");
            body
            {
                background-image: url('<?=$backgroundImage ?>');
            }
        </style>
    </head>
    <body>
        <br>
        <?php
            if (!isset($imageURLs)) // no form yet
            {
                echo "<h2> Type a keyword to display a slideshow <br /> with random images from Pixabay.com </h2>";
            }
            else
        
                // Display Carousel
        ?>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- indicators -->
            <ol class ="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <?php
                    for ($ii = 1; $ii < 7; $ii++)
                    {
                        echo "<li data-target='#carousel-example-generic' data-slide-to='$ii'";
                        echo ($ii == 0) ? "class='active'" : "";
                        echo "></li>";
                    }
                ?>
            </ol>
        </div>
        <div class="carousel-inner" role="listbox">
            <?php
                for($ii = 0; $ii < 7; $ii++)
                {
                    do
                        $randomIndex = rand(0, count($imageURLs));
                    
                    while(!isset($imageURLs[$randomIndex]));
                    
                        echo '<div class="carousel-item ';
                        echo ($ii == 0) ? "active" : "";
                        echo '">';
                        echo '<img src="' . $imageURLs[$randomIndex] . '">';
                        echo '</div>';
                        unset($imageURLs[$randomIndex]);
                }
            ?>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        <?php
            // end Else
        ?>
        <br>
        <!-- form goes here -->
        <form>
            <input type="text" name="keyword" placeholder="Keyword" value="<?=$_GET['keyword']?>"/>
            <input type = "radio" id = "lhorizontal" name = "layout" value = "horizontal">
            <label for = "Horizontal"></label><label for="lhorizontal"> Horizontal </label>
            <input type = "radio" id = "lveritcal" name = "layout" value = "vertical">
            <label for = "Veritcal"></label><label for ="lvertical"> Vertical </label>
            <select name = "category">
                <option value ="">Select One</option>
                <option value="ocean">Sea</option>
                <option>Forest</option>
                <option>Mountain</option>
                <option>Snow</option>
            </select>
            <input type="submit" value="Search">
        </form>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" src=""></script>
    </body>
</html>