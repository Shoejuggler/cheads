<?php


 function displaySymbol($randomNumber, $pos){
            
         


        if ($randomNumber == 0){
            $symbol = "seven";
        } else if ($randomNumber == 1) {
            $symbol ="cherry";
        } else {
            $symbol = "lemon";
        }
        
        
        echo "<img id='reel$pos' src='img/$symbol.png' alt='$symbol' title='$symbol'width='70'/>";
        }
        
        function displayPoints($randomNumber1, $randomNumber2, $randomNumber3){
            echo"<div id = 'output'>";
            if ($randomNumber1 == $randomNumber2 && $randomNumber2 == $randomNumber3) {
                switch ($randomNumber1) {
                    case 0: $totalPoints = 1000;
                    echo "<h1> JACKPOT!!! <h1>";
                    break;
                    case 1: $totalPoints = 500;
                    break;
                    case 2: $totalPoints = 250;
                    break;
                }
                echo "<h2> You won $totalPoints points! </h2";
            } else{
            
                echo "<h1> TRY AGAIN!</h1>";
            }
                echo "</div>";
              for ($i=1; $i<4; $i++){
                        ${"randomValue" . $i } = rand (0,2);
                        displaySymbol(${"randomValue" . $i}, $i );
        }
        }
        $randomNumber1 = rand(0,2);
        
        
        displaySymbol($randomNumber1);
        $randomNumber2 = rand(0,2);
        displaySymbol($randomNumber2);
        $randomNumber3 = rand(0,2);
        displaySymbol($randomNumber3);
        
        echo "<br>The random values are: <br>";
        echo $randomNumber1 . " , "  . $randomNumber2 .  " & "  . $randomNumber3;
        
        displayPoints($randomNumber1, $randomNumber2, $randomNumber3);
        function play (){
            
        }

?>
