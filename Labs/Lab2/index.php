<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <meta charset="utf-8" />
    </head>
    <body>
        
        <?php
        
        
        //$symbol = "orange";
        
        function displaySymbol($randomValue){
            
         $randomNumber = rand(0,2);
        
        if ($randomNumber == 0){
            $symbol = "seven";
        } else if ($randomNumber == 1) {
            $symbol ="cherry";
        } else {
            $symbol = "lemon";
        }
        
        
        echo "<img src='img/$symbol.png' alt='$symbol' title='$symbol'width='70'/>";
        }
        
        function displayPoints(){
            if ($randomValue1 != $randomValue2) {
            
                echo "<h1> TRY AGAIN!</h1>";
            }
        }
        $randomValue1 = rand(0,2);
        
        
        displaySymbol(randomValue1);
        $randomValue2 = rand(0,2);
        displaySymbol(randomValue2);
        $randomValue3 = rand(0,2);
        displaySymbol(randomValue3);
        
        echo "<br>The random values are: <br>";
        echo $randomValue1 . " , "  . $randomValue2 .  " & "  . $randomValue3;
        
        displayPoints($randomValue1, $randomValue2, $randomValue3);
        ?>

    </body>
</html>