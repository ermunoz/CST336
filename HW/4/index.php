<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <meta charset="utc-8">
    <title>Sports Team Quiz</title>
    <head>
        <link rel="stylesheet" href="styles.css">
        <h1>American Sports Team Quiz</h1>
    </head>
    <body>
        <form action="key.php" method="post" id="sportquiz">
            <!-- used an organized list to do the questions -->
            <ol>
                <li>
                    <h2>How many cities have never had a championship winning team?</h2>
                </li>
                <!-- div for each QUESTION -->
                <!-- 1 -->
                <div class="num">
                    <input type="number" name="q1">
                </div>
                <br>
                <li>
                    <h2>Which team is the newest professional sports team in ALL sports?</h2>
                </li>
                <!-- 2 -->
                <div class="multiple_choice">
                    <input type="radio" name="q2" value="columbus_bluejackets"/> <img src="image/columbus_bluejackets.gif" title="Columbus Blue Jackets">
                    <input type="radio" name="q2" value="la_fc"/> <img src="image/la_fc.gif" title="LAFC">
                    <input type="radio" name="q2" value="no_pelicans"/> <img src="image/no_pelicans.gif" title="New Orleans Pelicans">
                    <input type="radio" name="q2" value="la_chargers"/> <img src="image/la_chargers.gif" title="Los Angeles Chargers">
                    <input type="radio" name="q2" value="miami_inter"/> <img src="image/miami_inter.gif" title="Inter Miami FC">
                    <input type="radio" name="q2" value="vegas_goldenknights"/> <img src="image/vegas_goldenknights.gif" title="Vegas Golden Knights">
                </div>
                <br>
                <li>
                    <h2>Which team has the MOST total championship wins? (Most throughout any sport)</h2>
                </li>
                <!-- 3 -->
                <div class="multiple_choice">
                    <input type="radio" name="q3" value="montreal_canadiens"/> <img src="image/montreal_canadiens.gif" title="Montreal Canadiens">
                    <input type="radio" name="q3" value="pittsburgh_steelers"/> <img src="image/pittsburgh_steelers.gif" title="Pittsburgh Steelers">
                    <input type="radio" name="q3" value="ny_yankees"/> <img src="image/ny_yankees.gif" title="New York Yankees">
                    <input type="radio" name="q3" value="la_lakers"/> <img src="image/la_lakers.gif" title="Los Angeles Lakers">
                    <input type="radio" name="q3" value="boston_celtics"/> <img src="image/boston_celtics.gif" title="Boston Celtics">
                    <input type="radio" name="q3" value="toronto_mapleleafs"/> <img src="image/toronto_mapleleafs.gif" title="Toronto Maple Leafs">
                </div>
                <br>
                <li>
                    <h2>Which team recently broke a 100+ year drought of NOT winning a championship?</h2>
                </li>
                <!-- 4 -->
                <div class="multiple_choice">
                    <input type="radio" name="q4" value="chicago_cubs"/> <img src="image/chicago_cubs.gif" title="Chicago Cubs">
                    <input type="radio" name="q4" value="philadelphia_eagles"/> <img src="image/philadelphia_eagles.gif" title="Philadelphia Eagles">
                    <input type="radio" name="q4" value="houston_astros"/> <img src="image/houston_astros.gif" title="Houston Astros">
                    <input type="radio" name="q4" value="gs_warriors"/> <img src="image/gs_warriors.gif" title="Golden State Warriors">
                    <input type="radio" name="q4" value="washington_capitals"/> <img src="image/washington_capitals.gif" title="Washington Capitals">
                    <input type="radio" name="q4" value="cleveland_cavaliers"/> <img src="image/cleveland_cavaliers.gif" title="Cleveland Cavaliers">
                </div>
                <br>
                
                <li>
                    <h2>Which team has the MOST market value? (Most richest team)</h2>
                </li>
                <!-- 5 -->
                <div class="multiple_choice">
                    <input type="radio" name="q5" value="ny_yankees"/> <img src="image/ny_yankees.gif" title="New York Yankees">
                    <input type="radio" name="q5" value="la_dodgers"/> <img src="image/la_dodgers.gif" title="Los Angeles Dodgers">
                    <input type="radio" name="q5" value="ne_patriots"/> <img src="image/ne_patriots.gif" title="New England Patriots">
                    <input type="radio" name="q5" value="pittsburgh_penguins"/> <img src="image/pittsburgh_penguins.gif" title="Pittsburgh Penguins">
                    <input type="radio" name="q5" value="gb_packers"/> <img src="image/gb_packers.gif" title="Green Bay Packers">
                    <input type="radio" name="q5" value="dallas_cowboys"/> <img src="image/dallas_cowboys.gif" title="Dallas Cowboys">
                </div>
                <br>
                
                <li>
                    <h2>How many teams have birds as their logos?</h2>
                </li>
                <!-- 6 -->
                <div class="multiple_choice">
                    <input type="number" name="q6">
                </div>
                <br>
                
                <li>
                    <h2>Which city has the MOST professional teams in their city?</h2>
                </li>
                <!-- 7 -->
                <div class="multiple_choice">
                    <select name="q7">
                        <option value ="none" selected disabled>Select</option>
                        <option value="bay">Bay Area</option>
                        <option value="dallas">Dallas</option>
                        <option value="chicago">Chicago</option>
                        <option value="detroit">Detroit</option>
                        <option value="ny">New York</option>
                        <option value="la">Los Angeles</option>
                        <option value="washington">Washington DC</option>
                        <option value="boston">Boston</option>
                        <option value="toronto">Toronto</option>
                        <option value="minneapolis">Minneapolis</option>
                        <option value="miami">Miami</option>
                    </select>
                </div>
                <br>
                
                <li>
                    <h2>How many cities only have 1 UNIQUE team? Meaning that only 1 professional team from ANY professional league plays in that city.</h2>
                </li>
                <!-- 8 -->
                <div class="num">
                    <input type="number" name="q8">
                </div>
            </ol>
            <input type="submit" name="submit" value="Submit Quiz">
        </form>
    </body>
</html>