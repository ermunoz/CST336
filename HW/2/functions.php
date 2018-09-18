<?php

function gen()
{
    for ($i = 0; $i < 3; $i++)
    {
        ${"randomValue"} = rand(0,3);
        /* Display Country
            Display League
            Display Team
        */
        country($randomValue);
        league($randomValue);
        
        ${"teamValue"} = rand(0,19);
        team($teamValue);
    }
}

function country($randomValue)
{
    switch ($randomValue)
    {
        case 0: $flag = "england";
            break;
        case 1: $flag = "spain";
            break;
        case 2: $flag = "germany";
            break;
        case 3: $flag = "italy";
            break;
    }
    
    echo "<img src ='img/$flag.png' alt='$flag' title='>";
}

function league($randomValue)
{
    if ($randomValue == 0)
    {
        ${"leagueVal"} = rand(0,1);
        
        if ($leagueVal == 1)
        {
            echo "<img src ='img/championship.png' alt=english championship' title='>";
        }
    }
    
    else
    {
        switch ($randomValue)
        {
            case 0: $league = "EPL";
                break;
            case 1: $league = "La Liga";
                break;
            case 2: $league = "Bundesliga";
                break;
            case 3: $league = "Serie A";
                break;
        }
        
        echo "<img src ='img/$league.png' alt='$league' title='>";
    }
}

function team($teamValue)
{
    switch($teamValue)
    {
        case 0: $team = "1";
            break;
        case 1: $team = "2";
            break;
        case 2: $team = "3";
            break;
        case 3: $team = "4";
            break;
        case 4: $team = "5";
            break;
        case 5: $team = "6";
            break;
        case 6: $team = "7";
            break;
        case 7: $team = "8";
            break;
        case 8: $team = "9";
            break;
        case 9: $team = "10";
            break;
        case 10: $team = "11";
            break;
        case 11: $team = "12";
            break;
        case 12: $team = "13";
            break;
        case 13: $team = "14";
            break;
        case 14: $team = "15";
            break;
        case 15: $team = "16";
            break;
        case 16: $team = "17";
            break;
        case 17: $team = "18";
            break;
        case 18: $team = "19";
            break;
        case 19: $team = "20";
            break;
    }
    
    echo "<img src ='$league/$team.png' alt='$team' title='>";
}
?>