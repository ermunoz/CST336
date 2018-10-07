<?php
    $backgroundImage = "img/sea.jpg";
    
    // API call goes here
    if (isset($_GET['keyword']))
    {
        //echo "You searched for: " . $_GET['keyword'];
        include 'Slider/api/pixabayAPI.php';
        $imageURLs = getImageURLs($_GET['keyword']);
        $backgroundImage = $imageURLs[array_rand($imageURLs)];
        //print_r($imageURLs);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Image Carousel</title>
        <link href ="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
        <style>
            @import url("css/styles.css");
            body
            {
                background-Image: url('<?=$backgroundImage ?>');
            }
        </style>
    </head>
    <body>
        <br>
        <?php
            if (!isset($imageURLs))
            {
                echo "<h2> Type a keyword to display a slideshow <br /> with random images from Pixabay.com </h2>";
            }
            else
            {
                // Display carousel here
        ?>
        <div id="carousel-example-generic" class="carousel-slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <?php
                for ($ii = 0; $ii < 5; $ii++)
                {
                    do
                    {
                        $randomIndex = rand(0,count($imageURLs));
                    }
                    
                    while (!isset($imageURLs[$randomIndex]));
                    echo '<div class ="carousel-item ';
                    echo ($ii == 0)?"active": "";
                    echo  '">';
                    echo '<img src="' . $imageURLs[$randomIndex] . '">';
                    echo '</div>';
                    unset($imageURLs[$randomIndex]);
                }
            ?>
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          
          <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="..." alt="...">
                    <div class="carousel-caption">
                    </div>
                </div>
            <div class="item">
                <img src="..." alt="...">
                <div class="carousel-caption">
                </div>
            </div>
            
        </div>
        <!-- Controls Here -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <?php
        }
    ?>
        <!-- HTML form goes here -->
        <form>
            <input type="text" name="keyword" placeholder="Keyword">
            <input type="submit" value="Submit" />
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>