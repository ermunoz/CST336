<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <meta charset="utc-8">
    <title>World Cup Quiz</title>
    <head>
        <link rel="stylesheet" href="styles.css">
        <h1>FIFA World Cup Quiz</h1>
    </head>
    <body>
        <form action="key.php" method="post" id="worldcupquiz">
            <!-- used an organized list to do the questions -->
            <ol>
                <li>
                    <h2>Which nation has the MOST World Cup titles?</h2>
                </li>
                <!-- div for each QUESTION -->
                <!-- 1 -->
                <div class="multiple_choice">
                    <input type="radio" name="q1" value="Germany"/> <img src="image/Germany.png" title="Germany">
                    <input type="radio" name="q1" value="Argentina"/> <img src="image/Argentina.png" title="Argentina">
                    <input type="radio" name="q1" value="Brazil"/> <img src="image/Brazil.png" title="Brazil">
                    <input type="radio" name="q1" value="Mexico"/> <img src="image/Mexico.png" title="Mexico">
                </div>
                <br>
                <li>
                    <h2>Where was the World Cup LAST held?</h2>
                </li>
                <!-- 2 -->
                <div class="multiple_choice">
                    <input type="radio" name="q2" value="Brazil"/> <img src="image/Brazil.png" title="Brazil">
                    <input type="radio" name="q2" value="England"/> <img src="image/England.png" title="England">
                    <input type="radio" name="q2" value="South Africa"/> <img src="image/South Africa.png" title="South Africa">
                    <input type="radio" name="q2" value="Russia"/> <img src="image/Russia.png" title="Russia">
                </div>
                <br>
                <li>
                    <h2>Which nation WON the World Cup in 1986?</h2>
                </li>
                <!-- 3 -->
                <div class="multiple_choice">
                    <input type ="radio" name="q3" value="Scotland"/> <img src="image/Scotland.png" title="Scotland">
                    <input type ="radio" name="q3" value="Netherlands"/> <img src="image/Netherlands.png" title="Netherlands">
                    <input type ="radio" name="q3" value="Portugal"/> <img src="image/Portugal.png" title="Portugal">
                    <input type ="radio" name="q3" value="Argentina"/> <img src="image/Argentina.png" title="Argentina">
                </div>
                <br>
                <li>
                    <h2>Which country just WON the world cup?</h2>
                </li>
                <!-- 4 -->
                <div class="written">
                    <input type="text" name="q4" placeholder="Nation">
                </div>
                <br>
                
                <li>
                    <h2>Every ___ years the World Cup is played</h2>
                </li>
                <!-- 5 -->
                <div class="num">
                    <input type="number" name="q5">
                </div>
                <br>
                
                <li>
                    <h2>The NEXT host of the World Cup is:</h2>
                </li>
                <!-- 6 -->
                <div class="multiple_choice">
                    <input type="radio" name="q6" value="USA/Mexico/Canada"/> <img src="image/United States.png" title="USA"><img src="image/Mexico.png" title="Mexico"><img src="image/Canada.png" title="Canada">
                    <input type="radio" name="q6" value="Qatar"/> <img src="image/Qatar.png" title="Qatar">
                    <input type="radio" name="q6" value="Australia"/> <img src="image/Australia.png" title="Australia">
                    <input type="radio" name="q6" value="Argentina/Uruguay/Paraguay"/> <img src="image/Argentina.png" title="Argentina"><img src="image/Uruguay.png" title="Uruguay"><img src="image/Paraguay.png" title="Paraguay">
                </div>
                <br>
                
                <li>
                    <h2>Which player has won the World Cup 3 times?</h2>
                </li>
                <!-- 7 -->
                <div class="multiple_choice">
                    <input type="radio" name="q7" value="Pele"/> <img src="image/Pele.jpg" title="Pele">
                    <input type="radio" name="q7" value="Franz Beckenbauer"/> <img src="image/Beckenbauer.jpg" title="Franz Beckenbauer">
                    <input type="radio" name="q7" value="Diego Maradona"/> <img src="image/Maradona.jpg" title="Diego Maradona">
                    <input type="radio" name="q7" value="Bobby Charlton"/> <img src="image/Charlton.jpg" title="Sir Bobby Charlton">
                </div>
                <br>
                
                <li>
                    <h2>Which nation is the SMALLEST nation to EVER have participated at the World Cup as of 2018?</h2>
                </li>
                <!-- 8 -->
                <div class="dropdown">
                    <select name="q8">
                        <option value ="none" selected disabled>Select</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Iceland">Iceland</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Wales">Wales</option>
                    </select>
                </div>
            </ol>
            <input type="submit" name="submit" value="Submit Quiz">
        </form>
    </body>
</html>