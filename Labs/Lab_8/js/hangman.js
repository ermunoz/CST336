// VARIABLES
var selectedWord = "";
var selectedHint = "";
var board = [];
var guesses = 6;
var words = ["snake", "monkey", "beetle"];
var randomInt;

// LISTENERS
window.onload = startGame();

// FUNCTIONS
function startGame()
{
    pickWord();
    initBoard();
    updateBoard();
}
// fill board with ______           
function initBoard()
{
    for (var letter in selectedWord)
    {
        board.push("_");
    }
}

function pickWord()
{
    randomInt = Math.floor(Math.random() * words.length);
    selectedWord = words[randomInt].toUpperCase();
    selectedHint = words[randomInt].hint;
}

function updateBoard()
{
    $("#word").empty();
    for (var ii = 0; ii < board.length; ii++)
    {
        $("#word").append(board[ii] + " ");
    }
    
    $("#word").append("<br />");
    $("#word").append("<span class='hint'>Hint: " + selectedHint + "</span>");
}

function createLetters()
{
    for (var letter of alphabet)
    {
        $("#letters").append("<button class='letter' id='" + letter + "'>" + letter + "</button>");
    }
}

function checkLetter(letter)
{
    var positions = new Array();
    
    // put all the positions of letter exists in an array
    for (var ii = 0; ii < selectedWord.length; ii++)
    {
        console.log(selectedWord);
        
        if (letter == selectedWord[ii])
        {
            positions.push(ii);
        }
    }
    
    if (positions.length > 0)
    {
        updateWord(positions, letter);
        
        if (!board.includes("_"))
        {
            endGame(true);
        }
    }
    else
    {
        guesses -= 1;
        updateMan();
    }
    
    if (guesses <= 0)
    {
        endGame(false);
    }
}

function updateWord(positions, letter)
{
    for (var pos of positions)
    {
        board[pos] = letter;
    }
    updateBoard();
}

function updateMan()
{
    $("#hangImg").attr("src", "img/stick_" + (6-guesses) + ".png");
}

function endGame(win)
{
    $("#letters").hide();
    
    if (win)
    {
        $("#won").show();
    }
    else
    {
        $("#lost").show();
    }
}

function disableButton(btn)
{
    btn.prop("disabled", true);
    btn.attr("class", "btn btn-danger");
}
// jQUERY FUNCTIONS
$("#letterBTN").click(function()
{
    var boxVal = $("#letterBox").val();
    console.log("You pressed the button that had the value: " + boxVal);
});

$(".letter").click(function()
{
    console.log($(this).attr("id"));
});

$(".replayBTN").on("click", function()
{
   location.reload(); 
});

$(".letter").click(function() 
{
    checkLetter($(this).attr("Id"));
    disableButton($(this));
});


initBoard();
var alphabet = ["A","B","C","D","E","F","G","H","I","J","K","L","M",
                "N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];

var words = [{ word: "snake", hint: "It's a reptille"},
            {word: "monkey", hint: "It's a mammal"}, 
            {word: "beetle", hint: "It's an insect"}];
            
console.log(words[0]);