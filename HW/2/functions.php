<?php

// function displays random nation and its league when refreshed

function country()
{
    global $sharedVal;
    $randomTeam = rand(0,3);
    $sharedVal = $randomTeam;

    switch ($randomTeam)
    {
        case 0:
        {
            $flag = "england";
            break;
        }
            
        case 1:
        {
            $flag = "spain";
            break;
        }
            
        case 2:
        {
            $flag = "germany";
            break;
        }
        case 3:
        {    
            $flag = "italy";
            break;
        }
    }
    
    echo "<img src ='img/$flag.png' alt='$flag' title=''>\n";
}

function league()
{
    global $sharedVal;
    
    switch ($sharedVal)
    {
        case 0:
        {
            $league = "epl";
            break;
        }
            
        case 1:
        {
            $league = "laliga";
            break;
        }
            
        case 2:
        {
            $league = "bundesliga";
            break;
        }
        case 3:
        {    
            $league = "seriea";
            break;
        }
    }
    
    echo "<img src ='img/$league.png' alt='$league' title=''>\n";
}

// function generates a random club from chosen league

function team()
{
    global $sharedVal;
    global $club;
    global $team;
    
    switch ($sharedVal)
    {
        case 0:
        {
            $club = rand(0,4);
            break;
        }
        
        case 1:
        {
            $club = rand(5,9);
            break;
        }
        
        case 2:
        {
            $club = rand(10,14);
            break;
        }
        
        case 3:
        {
            $club = rand(15,19);
            break;
        }
    }
    
    switch ($club)
    {
        // EPL TEAMS
        case 0: $team = "chelsea";
            break;
            
        case 1: $team = "liverpool";
            break;
            
        case 2: $team = "manchestercity";
            break;
            
        case 3: $team = "manchesterunited";
            break;
            
        case 4: $team = "tottenhamhotspur";
            break;
        
        // LA LIGA TEAMS    
        case 5: $team = "atleticomadrid";
            break;
            
        case 6: $team = "barcelona";
            break;
            
        case 7: $team = "realmadrid";
            break;
            
        case 8: $team = "sevilla";
            break;
            
        case 9: $team = "villareal";
            break;
            
        // BUNGESLIGA TEAMS
        case 10: $team = "bayernmunich";
            break;
            
        case 11: $team = "borussiadortmund";
            break;
            
        case 12: $team = "borussiamochengladbach";
            break;
            
        case 13: $team = "rbleipzig";
            break;
            
        case 14: $team = "wolfsburg";
            break;
            
        // SERIE A TEAMS
        case 15: $team = "acmilan";
            break;
            
        case 16: $team = "intermilan";
            break;
            
        case 17: $team = "juventus";
            break;
            
        case 18: $team = "napoli";
            break;
            
        case 19: $team = "roma";
            break;
    }
    
    echo "<img src ='img/$team.png' alt='$team' title=''>\n";
}

// functions sets rosters in 2D arrays
function rosters()
{
    // GLOBAL ARRAYS
    global $chelsea;
    global $liverpool;
    global $man_city;
    global $man_united;
    global $spurs;
    global $atletico;
    global $barca;
    global $real_madrid;
    global $sevilla;
    global $villareal;
    global $bayern;
    global $dortmund;
    global $mochengladbach;
    global $leipzig;
    global $wolfsburg;
    global $milan;
    global $inter;
    global $juve;
    global $napoli;
    global $roma;
    
    // ROSTER 2D ARRAYS
    // EPL
    $chelsea = array
    (
        array("K. Arrizabalaga"),
        array("C. Azpilicueta", "A. Rudiger", "D. Luis", "M. Alonso"),
        array("N. Kante", "M. Kovacic", "Jorginho"),
        array("Willian", "O. Giroud", "E. Hazard"),
        array("Maurizio Sarri")
    );
    
    $liverpool = array
    (
        array("Alisson"),
        array("T. Alexander-Arnold", "J. Matip", "V. van Dijk", "A. Robertson"),
        array("G. Wijnaldum", "J. Henderson", "S. Mane", "X. Shaqiri", "R. Firmino"),
        array("M. Salah"),
        array("Jurgen Klopp")
    );
    
    $man_city = array
    (
        array("Ederson"),
        array("K. Walker", "J. Stones", "A. Laporte", "F. Delph"),
        array("Fernandinho", "D. Silva", "K. de Bruyne"),
        array("R. Sterling", "S. Aguero", "L. Sane"),
        array("Pep Guardiola")
    );
    
    $man_united = array
    (
        array("D. De Gea"),
        array("A. Valencia", "C. Smalling", "V. Lindelof", "L. Shaw"),
        array("P. Pogba", "Fred", "N. Matic"),
        array("J. Lindgard", "R. Lukaku", "A. Sanchez"),
        array("Jose Mourinho")
    );
    
    $spurs = array
    (
        array("H. Lloris"),
        array("K. Trippier", "T. Alderweireld", "J. Vertongen", "D. Rose"),
        array("E. Dier", "D. Alli", "H-M. Song", "C. Eriksen", "L. Moura"),
        array("H. Kane"),
        array("Mauricio Pochettino")
    );
    
    // LA LIGA
    $atletico = array
    (
        array("J. Oblak"),
        array("Juanfran", "J. Gimenez", "D. Godin", "F. Luis"),
        array("T. Lemar", "R. Hernandez", "Saul", "Koke"),
        array("D. Costa", "A. Griezmann"),
        array("Diego Simeone")
    );
    
    $barca = array
    (
        array("M. ter Stegen"),
        array("M. Semedo", "G. Pique", "S. Umtiti", "J. Alba"),
        array("A. Vidal", "S. Busquets", "I. Rakitic"),
        array("L. Messi", "L. Suarez", "O. Dembele"),
        array("Ernesto Valverde")
    );
    
    $real_madrid = array
    (
        array("T. Courtois"),
        array("Marcelo", "R. Varane", "S. Ramos", "Nacho"),
        array("Casemiro", "L. Modric", "T. Kroos"),
        array("Isco", "K. Benzema", "G. Bale"),
        array("Julen Lopetegui")
    );
    
    $sevilla = array
    (
        array("T. Vaclik"),
        array("S. Gomez", "S. Kjaer", "D. Carrico"),
        array("F. Vasquez", "P. Sarabia", "J. Navas", "A. Vidal", "E. Banega"),
        array("Ben Yedder", "Nolito"),
        array("Pablo Machin")
    );
    
    $villareal = array
    (
        array("S. Asenjo"),
        array("Mario", "V. Ruiz", "Alvaro", "J. Costa"),
        array("M. Trigueros", "R. Funes Mori", "P. Fornals", "M. Layun"),
        array("Gerard", "C. Bacca"),
        array("Javier Calleja")
    );
    
    // BUNDESLIGA
    $bayern = array
    (
        array("M. Neuer"),
        array("J. Kimmich", "J. Boateng", "M. Hummels", "D. Alaba"),
        array("J. Martinez", "J. Rodriguez", "T. Muller"),
        array("A. Robben", "R. Lewandowski", "F. Ribery"),
        array("Niko Kovac")
    );
    
    $dortmund = array
    (
        array("R. Burki"),
        array("L. Piszczek", "M. Akanji", "A. Diallo", "M. Schmelzer"),
        array("M. Dahoud", "A. Witsel", "C. Pulisic", "S. Kagawa","M. Reus"),
        array("M. Wolf"),
        array("Lucien Favre")
    );
    
    $mochengladbach = array
    (
        array("Y. Sommer"),
        array("N. Elvedi", "M. Ginter", "T. Jantschke", "O. Wendt"),
        array("J. Hofmann", "L. Stindl", "D. Zakaria"),
        array("F. Johnson", "A. Plea", "T. Hazard"),
        array("Dieter Hecking")
    );
    
    $leipzig = array
    (
        array("P. Gulacsi"),
        array("K. Laimer", "W. Orban", "D. Upamecano", "M. Saracchi"),
        array("K. Kampl", "D. Demme", "M. Sabitzer", "E. Forsberg"),
        array("Y. Poulsen", "T. Werner"),
        array("Ralf Rangnick")
    );
    
    $wolfsburg = array
    (
        array("K. Casteels"),
        array("W. Furtado", "R. Knoche", "J. Brooks", "J. Roussillon"),
        array("M. Arnold", "I. Camacho", "Y. Gerhardt"),
        array("R. Steffan", "W. Weghorst", "A. Mehmedi"),
        array("Bruno Labbadia")
    );
    
    $milan = array
    (
        array("G. Donnarumma"),
        array("D. Calabria", "M. Musacchio", "A. Romagnoli", "R. Rodriguez"),
        array("L. Biglia", "F. Kessie", "G. Bonaventura"),
        array("Suso", "G. Higuain", "H. Calhanoglu"),
        array("Gennaro Gattuso")
    );
    
    $inter = array
    (
        array("S. Handanovic"),
        array("D. D'Ambrosio", "S. de Vrij", "M. Skriniar", "K. Asamoah"),
        array("M. Vecino", "M. Brozovic", "A. Candreva", "R. Nainggolan", "I. Perisic"),
        array("M. Icardi"),
        array("Luciano Spalletti")
    );
    
    $juve = array
    (
        array("W. Szczesny"),
        array("J. Cuadrado", "L. Bonucci", "G. Chiellini", "Alex Sandro"),
        array("B. Matuidi", "E. Can", "M. Pjanic"),
        array("P. Dybala", "M. Mandzukic", "C. Ronaldo"),
        array("Massimiliano Allegri")
    );
    
    $napoli = array
    (
        array("D. Ospina"),
        array("E. Hysajs", "R. Albiol", "K. Koulibaly", "S. Luperto"),
        array("M. Rog", "M. Hamsik", "J. Callejon", "L. Insigne", "A. Milik"),
        array("D. Mertens"),
        array("Carlo Ancelotti")
    );
    
    $roma = array
    (
        array("R. Olsen"),
        array("A. Florenzi", "K. Manolas", "F. Fazio", "I. Marcano"),
        array("L. Pellegrini", "D. De Rossi", "B. Christiante"),
        array("J. Kluivert", "E. Dzeko", "D. Perotti"),
        array("Eusebio Di Francesco")
    );
}

function display_roster()
{
    global $club;
    
    // not good practice but idk what else to do but make eveyrthing global
    global $chelsea;
    global $liverpool;
    global $man_city;
    global $man_united;
    global $spurs;
    global $atletico;
    global $barca;
    global $real_madrid;
    global $sevilla;
    global $villareal;
    global $bayern;
    global $dortmund;
    global $mochengladbach;
    global $leipzig;
    global $wolfsburg;
    global $milan;
    global $inter;
    global $juve;
    global $napoli;
    global $roma;
    
    switch($club)
    {
        case 0:
        {
            echo "<h1> Chelsea Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$chelsea[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 1:
        {
            echo "<h1> Liverpool Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$liverpool[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 2:
        {
            echo "<h1> Manchester City Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$man_city[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 3:
        {
            echo "<h1> Manchester United Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$man_united[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 4:
        {
            echo "<h1> Tottenham Hotspur Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$spurs[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 5:
        {
            echo "<h1> Atletico Madrid Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$atletico[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 6:
        {
            echo "<h1> Barcelona Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$barca[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 7:
        {
            echo "<h1> Real Madrid Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$real_madrid[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 8:
        {
            echo "<h1> Sevilla Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$sevilla[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 9:
        {
            echo "<h1> Villareal Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$villareal[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 10:
        {
            echo "<h1> Bayern Munich Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$bayern[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 11:
        {
            echo "<h1> Borussia Dortmund Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$dortmund[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 12:
        {
            echo "<h1> Borussia Mochengladbach Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$mochengladbach[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 13:
        {
            echo "<h1> RB Leipzig Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$leipzig[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 14:
        {
            echo "<h1> Wolfsburg Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$wolfsburg[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 15:
        {
            echo "<h1> AC Milan Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$milan[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 16:
        {
            echo "<h1> Inter Milan Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$inter[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 17:
        {
            echo "<h1> Juventus Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$juve[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 18:
        {
            echo "<h1> Napoli Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$napoli[$r][$c]."</h3></br>";
                }
            }
            break;
        }
        
        case 19:
        {
            echo "<h1> AS Roma Starting XI \n</h1>";
            
            for ($r = 0; $r < 5; $r++)
            {
                if ($r == 0)
                {
                    echo "<p><h2> Goalkeepers </h2></p>";
                }
                
                if ($r == 1)
                {
                    echo "<p><h2> Defenders </h2></p>";
                }
                
                if ($r == 2)
                {
                    echo "<p><h2> Midfield </h2></p>";
                }
                
                if ($r == 3)
                {
                    echo "<p><h2> Forwards </h2></p>";
                }
                
                if ($r == 4)
                {
                    echo "<p><h2> Manager </h2></p>";
                }
                for ($c = 0; $c < 5; $c++)
                {
                    echo "<br><h3>".$roma[$r][$c]."</h3></br>";
                }
            }
            break;
        }
    }
}
?>