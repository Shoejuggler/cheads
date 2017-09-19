<?php
$wins= 0;
$losses=0;

function addWin()
{
    global $wins;
    $wins++;
}
function addLoss()
{
    global $losses;
    $losses++;
}
function getComputer(){
    return rand(1,3);
}
function getPlayer(){
    if ($_POST['submit'])
    {
        $player = $_POST['player'];
        switch($player)
        {
            case  "rock":
                return 1;
            case   "paper":
                return 2;
            case  "scissors":
                return 3;
            echo "<img src='img/$icon.png' alt='$icon' title='$icon'width='70'/>";
        }
    }
}
function getBestOf(){
    
    if($_POST['submit'])
    {
        return $_POST['bestof'];
    }
}
    function getRoundWinner($player, $computer)
    {
            if($player == $computer)
            {
                return "Draw!";
            }
            else if ($player == 1 && $computer == 3)
            {
                addWin();
                return "YOU WIN!!!";
            }
            else if ($player == 2 && $computer == 1)
            {
                addWin();
                return "YOU WIN!!!";
            }
               else if ($player == 3 && $computer == 2)
            {
                addWin();
                return "YOU WIN!!!";
            }
            else
            {
                addLoss();
                return "YOU LOSE!!!";
            }
    }
    function getWinner()
    {   
        global $wins, $losses;
        $bestof = getBestOf();
        if($wins > $bestof/2 || $losses > $bestof/2)
        {
            if ($wins > $losses)
            {
                return "YOU BEAT THE COMPUTER!!! Wanna try again?";
            }
            else
            {
                return "The computer beat you like a drum. Want to try and redeem yourself?";
            }
        }
        else
            return 0;

}


?>


<!DOCTYPE html>
<html>
    <head>
        <title>Ultimate Rock Paper Scissiors Simulator </title>
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    <body>
    <body class="orange-background">
    <div id="cornerz">
    <div class="head">
        <header>
          <h3>Ultimate Rock Paper Scissors Simulator!!!</h3>
          <form name="form" action="rpsresults.php" method="post">
    <b>Choose Your Weapon:</b><br />
    <input type="radio" name="player" value="rock" required/>Rock<br />
    <input type="radio" name="player" value="paper" required/>Paper<br />
    <input type="radio" name="player" value="scissors" required/>Scissors<br />
    <input type="submit" value="Calculate" name="submit"/><br/>
</form>
        </header>
    </body>
</html>