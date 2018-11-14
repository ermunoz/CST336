<?php
    // gets user-submitted answers
    $a1 = $_POST['q1'];
    $a2 = $_POST['q2'];
    $a3 = $_POST['q3'];
    $a4 = $_POST['q4'];
    $a5 = $_POST['q5'];
    $a6 = $_POST['q6'];
    $a7 = $_POST['q7'];
    $a8 = $_POST['q8'];
    
    $grade = 0;
    
    if(isset($_POST["submit"]))
    {
        // checks against the key and if there is an input
        // 1
        if(empty($_POST['q1']) || !is_numeric($_POST['q1']))
        {
            echo "<h2 id='one'>1. How many cities have never had a championship winning team?</h2>";
            echo "<h1 class='error'> Missing an answer, please answer the question.</h1>";
            echo "<br>";
        }

        elseif(!empty($_POST['q1']))
        {
            echo "<h2 id='one'>1. How many cities have never had a championship winning team?</h2>";
            echo "<br>";
            
            if ($a1 == "11")
            {
                echo "<h1 class='right'>Your answer is CORRECT!</h1>";
                echo "<br>";
                $grade++;
            }
            
            else
            {
                echo "<h1 class='wrong'>Your answer is WRONG!</h1>";
                echo "<br>";
            }
        }
        
        // 2
        if(empty($_POST['q2']))
        {
            echo "<h2 id='two'>2. Which team is the newest professional sports team in ALL sports?</h2>";
            echo "<h1 class='error'> Missing an answer, please answer the question.</h1>";
            echo "<br>";
        }

        elseif(!empty($_POST['q2']))
        {
            echo "<h2 id='two'>2. Which team is the newest professional sports team in ALL sports?</h2>";
            echo "<br>";
            
            if ($a2 == "miami_inter")
            {
                echo "<h1 class='right'>Your answer is CORRECT!</h1>";
                echo "<br>";
                $grade++;
            }
            
            else
            {
                echo "<h1 class='wrong'>Your answer is WRONG!</h1>";
                echo "<br>";
            }
        }
        
        // 3
        if(empty($_POST['q3']))
        {
            echo "<h2 id='three'>3. Which team has the MOST total championship wins? (Most throughout any sport)</h2>";
            echo "<h1 class='error'> Missing an answer, please answer the question.</h1>";
            echo "<br>";
        }

        elseif(!empty($_POST['q3']))
        {
            echo "<h2 id='three'>3. Which team has the MOST total championship wins? (Most throughout any sport)</h2>";
            echo "<br>";
            
            if ($a3 == "ny_yankees")
            {
                echo "<h1 class='right'>Your answer is CORRECT!</h1>";
                echo "<br>";
                $grade++;
            }
            
            else
            {
                echo "<h1 class='wrong'>Your answer is WRONG!</h1>";
                echo "<br>";
            }
        }
        
        // 4
        if(empty($_POST['q4']))
        {
            echo "<h2 id='four'>4. Which team recently broke a 100+ year drought of NOT winning a championship?</h2>";
            echo "<h1 class='error'> Missing an answer, please enter an answer.</h1>";
            echo "<br>";
        }

        elseif(!empty($_POST['q4']))
        {
            echo "<h2 id='four'>4. Which team recently broke a 100+ year drought of NOT winning a championship?</h2>";
            echo "<br>";
            
            if ($a4 == "chicago_cubs")
            {
                echo "<h1 class='right'>Your answer is CORRECT!</h1>";
                echo "<br>";
                $grade++;
            }
            
            else
            {
                echo "<h1 class='wrong'>Your answer is WRONG!</h1>";
                echo "<br>";
            }
        }
        
        // 5
        if(empty($_POST['q5']))
        {
            echo "<h2 id='five'>Which team has the MOST market value? (Most richest team)</h2>";
            echo "<h1 class='error'> Missing an answer, please enter an answer.</h1>";
            echo "<br>";
        }
        
        elseif(!empty($_POST['q5']))
        {
            echo "<h2 id='five'>5. Which team has the MOST market value? (Most richest team)</h2>";
            echo "<br>";
            
            if ($a5 == "dallas_cowboys")
            {
                echo "<h1 class='right'>Your answer is CORRECT!</h1>";
                echo "<br>";
                $grade++;
            }
            
            else
            {
                echo "<h1 class='wrong'>Your answer is WRONG!</h1>";
                echo "<br>";
            }
        }
        
        // 6
        if(empty($_POST['q6']) || !is_numeric($_POST['q6']))
        {
            echo "<h2 id='six'>6. How many teams have birds as their logos?</h2>";
            echo "<h1 class='error'> Missing an answer, please select an answer.</h1>";
            echo "<br>";
        }

        elseif(!empty($_POST['q6']))
        {
            echo "<h2 id='six'>6. How many teams have birds as their logos?</h2>";
            echo "<br>";
            
            if ($a6 == "15")
            {
                echo "<h1 class='right'>Your answer is CORRECT!</h1>";
                echo "<br>";
                $grade++;
            }
            
            else
            {
                echo "<h1 class='wrong'>Your answer is WRONG!</h1>";
                echo "<br>";
            }
        }
        
        // 7
        if(empty($_POST['q7']))
        {
            echo "<h2 id='seven'>7. Which city has the MOST professional teams in their city?</h2>";
            echo "<h1 class='error'> Missing an answer, please select an answer.</h1>";
            echo "<br>";
        }

        elseif(!empty($_POST['q7']))
        {
            echo "<h2 id='seven'>7. Which city has the MOST professional teams in their city?</h2>";
            echo "<br>";
            
            if ($a7 == "ny")
            {
                echo "<h1 class='right'>Your answer is CORRECT!</h1>";
                echo "<br>";
                $grade++;
            }
            
            else
            {
                echo "<h1 class='wrong'>Your answer is WRONG!</h1>";
                echo "<br>";
            }
        }
        
        // 8
        if(empty($_POST['q8']) || !is_numeric($_POST['q8']))
        {
            echo "<h2 id='eight'>8. How many cities only have 1 UNIQUE team? Meaning that only 1 professional team from ANY professional league plays in that city.</h2>";
            echo "<h1 class='error'> Select an answer from the dropdown menu next time.</h1>";
            echo "<br>";
        }

        elseif(!empty($_POST['q8']))
        {
            echo "<h2 id='eight'>8. How many cities only have 1 UNIQUE team? Meaning that only 1 professional team from ANY professional league plays in that city.</h2>";
            echo "<br>";
            
            if ($a8 == "13")
            {
                echo "<h1 class='right'>Your answer is CORRECT!</h1>";
                echo "<br>";
                $grade++;
            }
            
            else
            {
                echo "<h1 class='wrong'>Your answer is WRONG!</h1>";
                echo "<br>";
            }
        }
    }
        
    // echo grade
    echo "<p><h1 class='finalgrade'>You got $grade/8 questions right!</h1></p>";
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css"/>
        <script>
            function answer1()
            {
                // Base Answer
                document.getElementById("txt1").innerHTML = "<i><h3> 11 </h3></i>";
                // Buffalo
                document.getElementById("buffalo_txt").innerHTML = "<i><h3> Buffalo, NY </h3></i>";
                document.getElementById("buffalo_img").innerHTML = "<img src='image/buffalo_bills.gif' title='Buffalo Bills' /> <img src='image/buffalo_sabres.gif' title='Buffalo Sabres'/>";
                // Charlotte
                document.getElementById("charlotte_txt").innerHTML = "<i><h3> Charlotte, NC (Carolina Hurricanes play in Raleigh, NC. and have won the Stanley Cup once. These teams play in Charlotte, NC) </h3></i>";
                document.getElementById("charlotte_img").innerHTML = "<img src='image/carolina_panthers.gif' title='Carolina Panthers' /> <img src='image/charlotte_hornets.gif' title='Charlotte Hornets'/>";
                // Jacksonville
                document.getElementById("jacksonville_txt").innerHTML = "<i><h3> Jacksonville, FL </h3></i>";
                document.getElementById("jacksonville_img").innerHTML = "<img src='image/jacksonville_jaguars.gif' title='Jacksonville Jaguars' />";
                // Memphis
                document.getElementById("memphis_txt").innerHTML = "<i><h3> Memphis, TN </h3></i>";
                document.getElementById("memphis_img").innerHTML = "<img src='image/memphis_grizzlies.gif' title='Memphis Grizzlies' />";
                // Nashville
                document.getElementById("nashville_txt").innerHTML = "<i><h3> Nashville, TN </h3></i>";
                document.getElementById("nashville_img").innerHTML = "<img src='image/nashville_predators.gif' title='Nashville Predators' /> <img src='image/tennessee_titans.gif' title='Tennessee Titans'/>";
                // Orlando
                document.getElementById("orlando_txt").innerHTML = "<i><h3> Orlando, FL </h3></i>";
                document.getElementById("orlando_img").innerHTML = "<img src='image/orlando_city.gif' title='Orlando City' /> <img src='image/orlando_magic.gif' title='Orlando Magic'/>";
                // Ottawa
                document.getElementById("ottawa_txt").innerHTML = "<i><h3> Ottawa, ON </h3></i>";
                document.getElementById("ottawa_img").innerHTML = "<img src='image/ottawa_senators.gif' title='Ottawa Senators' />";
                // San Diego
                document.getElementById("sandiego_txt").innerHTML = "<i><h3> San Diego, CA (Chargers and Clippers were in San Diego before moving to LA and are still losers) </h3></i>";
                document.getElementById("sandiego_img").innerHTML = "<img src='image/la_chargers.gif' title='Los Angeles Chargers' /> <img src='image/la_clippers.gif' title='Los Angeles Clippers'/> <img src='image/sd_padres.gif' title='San Diego Padres' />";
                // Vancouver
                document.getElementById("vancouver_txt").innerHTML = "<i><h3> Vancouver, BC </h3></i>";
                document.getElementById("vancouver_img").innerHTML = "<img src='image/vancouver_canucks.gif' title='Vancouver Canucks' />";
                // Vegas
                document.getElementById("vegas_txt").innerHTML = "<i><h3> Las Vegas, NV </h3></i>";
                document.getElementById("vegas_img").innerHTML = "<img src='image/vegas_goldenknights.gif' title='Vegas Golden Knights' />";
                // Winnipeg
                document.getElementById("winnipeg_txt").innerHTML = "<i><h3> Winnipeg, MB </h3></i>";
                document.getElementById("winnipeg_img").innerHTML = "<img src='image/winnipeg_jets.gif' title='Winnipeg Jets' />";
            }
            
            function answer2()
            {
                // Inter Miami
                document.getElementById("miami_txt").innerHTML = "<i><h3> Inter Miami FC (2020) </h3></i>";
                document.getElementById("miami_img").innerHTML = "<img src='image/miami_inter.gif' title='Inter Miami FC' />";
            }
            
            function answer3()
            {
                // New York Yankees
                document.getElementById("yankees_txt").innerHTML = "<i><h3> New York Yankees (27) </h3></i>";
                document.getElementById("yankees_img").innerHTML = "<img src='image/ny_yankees.gif' title='New York Yankees' />";
            }
            
            function answer4()
            {
                // Chicago Cubs
                document.getElementById("chicago_txt").innerHTML = "<i><h3> Chicago Cubs (108 years) </h3></i>";
                document.getElementById("chicago_img").innerHTML = "<img src='image/chicago_cubs.gif' title='Chicago Cubs' />";
            }
            
            function answer5()
            {
                // Dallas Cowboys
                document.getElementById("dallas_txt").innerHTML = "<i><h3> Dallas Cowboys ($4.2 billion as of 2017) </h3></i>";
                document.getElementById("dallas_img").innerHTML = "<img src='image/dallas_cowboys.gif' title='Dallas Cowboys' />";
            }
            
            function answer6()
            {
                // Base Answer
                document.getElementById("txt6").innerHTML = "<i><h3> 15 </h3></i>";
                // MLB
                document.getElementById("mlb_txt").innerHTML = "<i><h3> Oriole, Cardinal, Jay (MLB) </h3></i>";
                document.getElementById("mlb_img").innerHTML = "<img src='image/baltimore_orioles.gif' title='Baltimore Orioles' /> <img src='image/stlouis_cardinals.gif' title='St. Louis Cardinals' /> <img src='image/toronto_bluejays.gif' title='Toronto Blue Jays' />";
                // MLS
                document.getElementById("mls_txt").innerHTML = "<i><h3> Eagle, Flamingo, Loon (MLS) </h3></i>";
                document.getElementById("mls_img").innerHTML = "<img src='image/dc_united.gif' title='DC United' /> <img src='image/miami_inter.gif' title='Inter Miami FC' /> <img src='image/minnesota_united.gif' title='Minnesota United' />";
                // NBA
                document.getElementById("nba_txt").innerHTML = "<i><h3> Hawk, Pelican (NBA) </h3></i>";
                document.getElementById("nba_img").innerHTML = "<img src='image/atlanta_hawks.gif' title='Atlanta Hawks' /> <img src='image/no_pelicans.gif' title='New Orleans Pelicans' />";
                // NFL
                document.getElementById("nfl_txt").innerHTML = "<i><h3> Cardinal, Falcon, Raven, Eagle, Seahawk (NFL) </h3></i>";
                document.getElementById("nfl_img").innerHTML = "<img src='image/arizona_cardinals.gif' title='Arizona Cardinals' /> <img src='image/atlanta_falcons.gif' title='Atlanta Falcons' /> <img src='image/baltimore_ravens.gif' title='Baltimore Ravens' /> <img src='image/philadelphia_eagles.gif' title='Philadelphia Eagles' /> <img src='image/seattle_seahawks.gif' title='Seattle Seahawks' />";
                // NHL
                document.getElementById("nhl_txt").innerHTML = "<i><h3> Duck, Penguin (NHL) </h3></i>";
                document.getElementById("nhl_img").innerHTML = "<img src='image/anaheim_ducks.gif' title='Anaheim Ducks' /> <img src='image/pittsburgh_penguins.gif' title='Pittsburgh Penguins' />";
            }
            
            function answer7()
            {
                // Base Answer
                document.getElementById("txt7").innerHTML = "<i><h3> New York </h3></i>";
                // New York
                document.getElementById("ny_txt").innerHTML = "<i><h3> Brooklyn Nets, NYCFC, New York Giants, Islanders, Jets, Knicks, Mets, Rangers, Red Bulls, and Yankees (10) </h3></i>";
                document.getElementById("ny_img").innerHTML = "<img src='image/brooklyn_nets.gif' title='Brooklyn Nets' /> <img src='image/ny_fc.gif' title='NYCFC' /> <img src='image/ny_giants.gif' title='New York Giants' /> <img src='image/ny_islanders.gif' title='New York Islanders' /> <img src='image/ny_jets.gif' title='New York Jets' /> <img src='image/ny_knicks.gif' title='New York Knicks' /> <img src='image/ny_mets.gif' title='New York Mets' /> <img src='image/ny_rangers.gif' title='New York Rangers' /> <img src='image/ny_redbulls.gif' title='New York Red Bulls' /> <img src='image/ny_yankees.gif' title='New York Yankees' />";
            }
            
            function answer8()
            {
                // Base Answer
                document.getElementById("txt8").innerHTML = "<i><h3> 13 </h3></i>";
                // Calgary
                document.getElementById("calgary_txt").innerHTML = "<i><h3> Calgary Flames (NHL) </h3></i>";
                document.getElementById("calgary_img").innerHTML = "<img src='image/calgary_flames.gif' title='Calgary Flames' />";
                // Edmonton
                document.getElementById("edmonton_txt").innerHTML = "<i><h3> Edmonton Oilers (NHL) </h3></i>";
                document.getElementById("edmonton_img").innerHTML = "<img src='image/edmonton_oilers.gif' title='Edmonton Oilers' />";
                // Green Bay
                document.getElementById("greenbay_txt").innerHTML = "<i><h3> Green Bay Packers (NFL) </h3></i>";
                document.getElementById("greenbay_img").innerHTML = "<img src='image/gb_packers.gif' title='Green Bay Packers' />";
                // Jacksonville
                document.getElementById("jax_txt").innerHTML = "<i><h3> Jacksonville Jaguars (NFL) </h3></i>";
                document.getElementById("jax_img").innerHTML = "<img src='image/jacksonville_jaguars.gif' title='Jacksonville Jaguars' />";
                // Memphis
                document.getElementById("mem_txt").innerHTML = "<i><h3> Memphis Grizzlies (NBA) </h3></i>";
                document.getElementById("mem_img").innerHTML = "<img src='image/memphis_grizzlies.gif' title='Memphis Grizzlies' />";
                // New Jersey
                document.getElementById("nj_txt").innerHTML = "<i><h3> New Jersey Devils (NHL) </h3></i>";
                document.getElementById("nj_img").innerHTML = "<img src='image/nj_devils.gif' title='New Jersey Devils' />";
                // Oklahoma City
                document.getElementById("okc_txt").innerHTML = "<i><h3> Oklahoma City Thunder (NBA) </h3></i>";
                document.getElementById("okc_img").innerHTML = "<img src='image/okc_thunder.gif' title='Oklahoma City Thunder' />";
                // Ottawa
                document.getElementById("ott_txt").innerHTML = "<i><h3> Ottawa Senators (NHL) </h3></i>";
                document.getElementById("ott_img").innerHTML = "<img src='image/ottawa_senators.gif' title='Ottawa Senators' />";
                // San Antonio
                document.getElementById("sa_txt").innerHTML = "<i><h3> San Antonio Spurs (NBA) </h3></i>";
                document.getElementById("sa_img").innerHTML = "<img src='image/sa_spurs.gif' title='San Antonio Spurs' />";
                // Sacramento
                document.getElementById("sacramento_txt").innerHTML = "<i><h3> Sacramento Kings (NBA) </h3></i>";
                document.getElementById("sacramento_img").innerHTML = "<img src='image/sacramento_kings.gif' title='Sacramento Kings' />";
                // San Diego
                document.getElementById("sd_txt").innerHTML = "<i><h3> San Diego Padres (MLB) </h3></i>";
                document.getElementById("sd_img").innerHTML = "<img src='image/sd_padres.gif' title='San Diego Padres' />";
                // Vegas
                document.getElementById("lv_txt").innerHTML = "<i><h3> Vegas Golden Knights (NHL) </h3></i>";
                document.getElementById("lv_img").innerHTML = "<img src='image/vegas_goldenknights.gif' title='Vegas Golden Knicks' />";
                // Winnipeg
                document.getElementById("wpg_txt").innerHTML = "<i><h3> Winnipeg Jets (NHL) </h3></i>";
                document.getElementById("wpg_img").innerHTML = "<img src='image/winnipeg_jets.gif' title='Winnipeg Jets' />";
            }
        </script>
    </head>

    <body class='keytitle'>
        <h1>Answer Sheet</h1>
        <h2> Click the buttons to display answers</h2>
        <hr> <br />
        
        <div id="answer1">
            <!-- Answer 1 shit -->
            <p id="txt1"></p>
            <p id="buffalo_txt"></p>
            <p id="buffalo_img"></p>
            <p id="charlotte_txt"></p>
            <p id="charlotte_img"></p>
            <p id="jacksonville_txt"></p>
            <p id="jacksonville_img"></p>
            <p id="memphis_txt"></p>
            <p id="memphis_img"></p>
            <p id="nashville_txt"></p>
            <p id="nashville_img"></p>
            <p id="orlando_txt"></p>
            <p id="orlando_img"></p>
            <p id="ottawa_txt"></p>
            <p id="ottawa_img"></p>
            <p id="sandiego_txt"></p>
            <p id="sandiego_img"></p>
            <p id="vancouver_txt"></p>
            <p id="vancouver_img"></p>
            <p id="vegas_txt"></p>
            <p id="vegas_img"></p>
            <p id="winnipeg_txt"></p>
            <p id="winnipeg_img"></p>
        </div>
        <div id="answer2">
            <!-- Answer 2 shit -->
            <p id="miami_txt"></p>
            <p id="miami_img"></p>
        </div>
        <div id="answer3">
            <!-- Answer 3 shit -->
            <p id="yankees_txt"></p>
            <p id="yankees_img"></p>
        </div>
        <div id="answer4">
            <!-- Answer 4 shit -->
            <p id="chicago_txt"></p>
            <p id="chicago_img"></p>
        </div>
        <div id="answer5">
            <!-- Answer 5 shit -->
            <p id="dallas_txt"></p>
            <p id="dallas_img"></p>
        </div>
        <div id="answer6">
            <!-- Answer 6 shit -->
            <p id="txt6"></p>
            <p id="mlb_txt"></p>
            <p id="mlb_img"></p>
            <p id="mls_txt"></p>
            <p id="mls_img"></p>
            <p id="nba_txt"></p>
            <p id="nba_img"></p>
            <p id="nfl_txt"></p>
            <p id="nfl_img"></p>
            <p id="nhl_txt"></p>
            <p id="nhl_img"></p>
        </div>
        <div id="answer7">
            <!-- Answer 7 shit -->
            <p id="txt7"></p>
            <p id="ny_txt"></p>
            <p id="ny_img"></p>
        </div>
        <div id="answer8">
            <!-- Answer 8 shit -->
            <p id="txt8"></p>
            <p id="calgary_txt"></p>
            <p id="calgary_img"></p>
            <p id="edmonton_txt"></p>
            <p id="edmonton_img"></p>
            <p id="greenbay_txt"></p>
            <p id="greenbay_img"></p>
            <p id="jax_txt"></p>
            <p id="jax_img"></p>
            <p id="mem_txt"></p>
            <p id="mem_img"></p>
            <p id="nj_txt"></p>
            <p id="nj_img"></p>
            <p id="okc_txt"></p>
            <p id="okc_img"></p>
            <p id="ott_txt"></p>
            <p id="ott_img"></p>
            <p id="sa_txt"></p>
            <p id="sa_img"></p>
            <p id="sacramento_txt"></p>
            <p id="sacramento_img"></p>
            <p id="sd_txt"></p>
            <p id="sd_img"></p>
            <p id="lv_txt"></p>
            <p id="lv_img"></p>
            <p id="wpg_txt"></p>
            <p id="wpg_img"></p>
        </div>
        <!-- Buttons -->
        <button id="answer_1" onclick="answer1()">Answer to #1</button>
        <button id="answer_2" onclick="answer2()">Answer to #2</button>
        <button id="answer_3" onclick="answer3()">Answer to #3</button>
        <button id="answer_4" onclick="answer4()">Answer to #4</button>
        <button id="answer_5" onclick="answer5()">Answer to #5</button>
        <button id="answer_6" onclick="answer6()">Answer to #6</button>
        <button id="answer_7" onclick="answer7()">Answer to #7</button>
        <button id="answer_8" onclick="answer8()">Answer to #8</button>
    </body>
</html>

