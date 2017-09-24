        <?php
        /*$deck = array ();
        for ($i=0; $i=52; $i++){
            $deck[$i]= $i;
        }*/
        $deck = range (1,41);
        shuffle($deck);
        //print_r($deck);
        $totalPoints=0;
        
        
        function displayHand() {
            global $deck, $totalPoints;
            $handPoints = 0;
            $handAces = 0;
            for ($i = 0 ; $i < 5; $i++) {
                //echo $deck[$i] . ' ';
                $lastCard = array_pop($deck);
                $cardValue = $lastCard % 13;
                $cardSuit;
                if($lastCard <= 13) {
                    $cardSuit = "clubs";
                }
                else if($lastCard > 13 && $lastCard <= 26){
                    $cardSuit = "diamonds";}
                else if($lastCard > 26 && $lastCard <= 39){
                    $cardSuit = "hearts";}
                else if($lastCard > 39){
                    $cardSuit = "spades";}
                    if ($cardValue == 0) {
                        $cardValue = 13;
                    }
                if($lastCard > 13 && $lastCard);{
                }
                
                    if ($cardValue == 1){
                        echo "<img class = 'ace' img src='cards/$cardSuit/$cardValue.png' alt ='Ace' />";
                        $handAces = $handAces +1;   //$handAces++;
                    }
                
                //echo $lastCard % 13 . " ";
                $handPoints = $handPoints + $cardValue;
                //$handPoints += $cardValue
                
                    echo "<img src='cards/$cardSuit/$cardValue.png' alt ='Ace' />";
            }
            echo " Points: " . $handPoints;
            
            echo " Aces: " . $handAces;
            
            $totalPoints = $totalPoints + $handPoints;
            
            return  $handAces;
        }
        

        
        
        
        
        
        /*function displayRandomCard(){
        //$randomCard = rand(1,13);
        $cardSuites = array("diamonds", "hearts", "spades", "clubs");
       // $randomSuite = rand (0,3);
echo "<img src='cards/$cardSuites[$randomSuite]/$randomCard.png'/>";

}
for($i=0; $i<5; $i++){
    
}*/
function identifyWinner($player1Aces, $computerAces){
    if ($player1Aces > $computerAces) {
    echo "Player One";
    }else if ($player1Aces < $computerAces) {
        echo "Computer";
    }else
        echo "No one";
    }


?>



<!DOCTYPE html>
<html>
    <head>
        <title>Lab 3: Ace Poker </title>
        <style>
            .ace{
                border: yellow 3px solid;
            }
        </style>
    </head>
    <body>
<header> 
<h1> Ace Poker</h1>
<br>
<h2>Hand with the most aces wins!</h2>
</header>
<?php
$player1Aces = displayHand();
?>
<br>
<?php
$computerAces = displayHand();
?>
<h2>
<?php
identifyWinner($player1Aces, $computerAces)
?>

Wins:
<?=$totalPoints?>
 Points!
</h2>

    </body>
</html>