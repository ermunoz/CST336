<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="styles.css"/>
    <body class='keytitle'>
        <h1>Answer Sheet</h1>
    </body>
</html>

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
        if(empty($_POST['q1']))
        {
            echo "<h2 id='one'>1. Which nation has the MOST World Cup titles?</h2>";
            echo "<h1 class='error'> Missing an answer, please answer the question.</h1>";
            echo "<br>";
        }

        elseif(!empty($_POST['q1']))
        {
            echo "<h2 id='one'>1. Which nation has the MOST World Cup titles?</h2>";
            echo "<br>";
            echo "<h4>You have answered $a1, the correct answer is: Brazil</h4>";
            echo "<br>";
            
            if ($a1 == "Brazil")
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
            echo "<h2 id='two'>2. Where was the World Cup LAST held?</h2>";
            echo "<h1 class='error'> Missing an answer, please answer the question.</h1>";
            echo "<br>";
        }

        elseif(!empty($_POST['q2']))
        {
            echo "<h2 id='two'>2. Where was the World Cup LAST held?</h2>";
            echo "<br>";
            echo "<h4>You have answered $a2, the correct answer is: Russia</h4>";
            echo "<br>";
            
            if ($a2 == "Russia")
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
            echo "<h1 id='three'>3. Which nation WON the World Cup in 1986?</h1>";
            echo "<h1 class='error'> Missing an answer, please answer the question.</h1>";
            echo "<br>";
        }

        elseif(!empty($_POST['q3']))
        {
            echo "<h2 id='three'>3. Which nation WON the World Cup in 1986?</h2>";
            echo "<br>";
            echo "<h4>You have answered $a3, the correct answer is: Argentina</h4>";
            echo "<br>";
            
            if ($a3 == "Argentina")
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
            echo "<h2 id='four'>4. Which country just WON the world cup?</h2>";
            echo "<h1 class='error'> Missing an answer, please enter an answer.</h1>";
            echo "<br>";
        }

        elseif(!empty($_POST['q4']))
        {
            echo "<h2 id='four'>4. Which country just WON the world cup?</h2>";
            echo "<br>";
            echo "<h4>You have answered $a4, the correct answer is: France</h4>";
            echo "<br>";
            
            if ($a4 == "France" || $a4 == "france")
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
        if(empty($_POST['q5']) || !is_numeric($_POST['q5']))
        {
            echo "<h2 id='five'>Every ___ years the World Cup is played</h2>";
            echo "<h1 class='error'> Enter a number for this question please.</h1>";
            echo "<br>";
        }

        elseif(!empty($_POST['q5']))
        {
            echo "<h2 id='five'>5. Every ___ years the World Cup is played</h2>";
            echo "<br>";
            echo "<h4>You have answered $a5, the correct answer is: 4</h4>";
            echo "<br>";
            
            if ($a5 == "4")
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
        if(empty($_POST['q6']))
        {
            echo "<h2 id='six'>6. The NEXT host of the World Cup is:</h2>";
            echo "<h1 class='error'> Missing an answer, please select an answer.</h1>";
            echo "<br>";
        }

        elseif(!empty($_POST['q6']))
        {
            echo "<h2 id='six'>6. The NEXT host of the World Cup is:</h2>";
            echo "<br>";
            echo "<h4>You have answered $a6, the correct answer is: Qatar</h4>";
            echo "<br>";
            
            if ($a6 == "Qatar")
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
            echo "<h2 id='seven'>7. Which player has won the World Cup 3 times?</h2>";
            echo "<h1 class='error'> Missing an answer, please select an answer.</h1>";
            echo "<br>";
        }

        elseif(!empty($_POST['q7']))
        {
            echo "<h2 id='seven'>7. Which player has won the World Cup 3 times?</h2>";
            echo "<br>";
            echo "<h4>You have answered $a7, the correct answer is: Pele</h4>";
            echo "<br>";
            
            if ($a7 == "Pele")
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
        if(empty($_POST['q8']))
        {
            echo "<h2 id='eight'>8. Which nation is the SMALLEST nation to EVER have participated at the World Cup as of 2018?</h2>";
            echo "<h1 class='error'> Select an answer from the dropdown menu next time.</h1>";
            echo "<br>";
        }

        elseif(!empty($_POST['q4']))
        {
            echo "<h2 id='eight'>8. Which nation is the SMALLEST nation to EVER have participated at the World Cup as of 2018?</h2>";
            echo "<br>";
            echo "<h4>You have answered $a8, the correct answer is: Iceland</h4>";
            echo "<br>";
            
            if ($a8 == "Iceland")
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