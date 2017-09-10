<?php


 function displaySymbol($randomNumber){
            
         
        
        if ($randomNumber == 0){
            $symbol = "seven";
        } else if ($randomNumber == 1) {
            $symbol ="cherry";
        } else if ($randomNumber == 2) {
            $symbol ="grapes";
        } else {
            $symbol = "lemon";
        }
        
        
        echo "<img src='img/$symbol.png' alt='$symbol' title='$symbol'width='70'/>";
        }
        
        function displayPoints($randomNumber1, $randomNumber2, $randomNumber3, $randomNumber4){
            echo"<div id = 'output'>";
            if ($randomNumber1 == $randomNumber2 && $randomNumber2 == $randomNumber3 && $randomNumber2 == $randomNumber4) {
                switch ($randomNumber1) {
                    case 0: $totalPoints = 1000;
                    echo "<h1> JACKPOT!!! <h1>";
                    break;
                    case 1: $totalPoints = 900;
                    break;
                    case 2: $totalPoints = 500;
                    break;
                    case 3: $totalPoints = 250;
                    break;
                }
                echo "<h2> You won $totalPoints points! </h2";
            } else{
            
                echo "<h1> TRY AGAIN!</h1>";
            }
            echo "</div>";
        
        }
        $randomNumber1 = rand(0,3);
        
        
        displaySymbol($randomNumber1);
        $randomNumber2 = rand(0,3);
        displaySymbol($randomNumber2);
        $randomNumber3 = rand(0,3);
        displaySymbol($randomNumber3);
        $randomNumber3 = rand(0,3);
        displaySymbol($randomNumber4);
        
        echo "<br>The random values are: <br>";
        echo $randomNumber1 . " , "  . $randomNumber2 .  " , "  . $randomNumber3 .  " & "  . $randomNumber4;
        
        displayPoints($randomNumber1, $randomNumber2, $randomNumber3, $randomNumber4);
        function play (){
            
        }

?>
