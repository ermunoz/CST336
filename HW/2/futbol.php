<?php
include 'functions.php';
?>

<!DOCTYPE html>
<html>
<head>
    <div id='website_title'>
        <h1> Random Soccer Team Generator </h1>
        <title>Soccer Team Generator</title>
        <style>
            @import url("styles.css");
        </style>
    </div>
</head>

<body>
    <div id='country'>
        <?php
            country();
        ?>
    </div>
    
    <div id='team'>
        <?php
            team();
        ?>
    </div>
    
    <div id='league'>
        <?php
            league();
        ?>
    </div>
    
    </br>
    
    <div id='roster'>
        <?php
            rosters();
            display_roster();
        ?>
    </div>
</body>

<footer><h3>NOT ALL TEAMS SHOWN.</h3></footer>
</html>