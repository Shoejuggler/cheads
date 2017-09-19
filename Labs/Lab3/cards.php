        <?php
        /*$deck = array ();
        for ($i=0; $i=52; $i++){
            $deck[$i]= $i;
        }*/
        $deck = range (1,52);
        shuffle($deck);
        print_r($deck);
        
        function displayHand() {
            global $deck;
            for ($i = 0 ; $i < 5; $i++) {
                //echo $deck[$i] . ' ';
                $lastCard = array_pop($deck);
                echo $lastCard % 13 . " ";
            }
        }
        echo "<hr>";
        displayHand();
        echo "<hr>";
        displayHand();
        echo "<hr>";
        
        
        
        
        
        function displayRandomCard(){
        $randomCard = rand(1,13);
        $cardSuites = array("diamonds", "hearts", "spades", "clubs");
        $randomSuite = rand (0,3);
echo "<img src='cards/$cardSuites[$randomSuite]/$randomCard.png'/>";

}
for($i=0; $i<5; $i++){
    displayRandomCard();
}

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Lab 3: Ace Poker </title>
    </head>
    <body>



    </body>
</html>