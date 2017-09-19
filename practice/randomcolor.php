<?php

function displayRandomColor(){
    
    return "rgba(" . rand(0,255) . ", ". rand(0,255) ." ,  ".rand(0,255)." , ". (rand(0,100)/100) .")";
            
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Random Background Color </title>
        <meta charset="utf-8" />
        
        <style>
            
            body {
                /*background-color: rgba(200,15,15,.6);*/
                <?php
                
                //$red = rand(0,255);
                //$alpha = rand(0,100)/100;
                //echo "background-color: rgba($red,15,15,$alpha)";
                echo "background-color: rgba(" . rand(0,255) . ", ". rand(0,255) ." ,  ".rand(0,255)." , ". (rand(0,100)/100) .")";
                
                ?>
                
            }
            
            
            h1 {
                <?php
                
                echo "color: rgba(" . rand(0,255) . ", ". rand(0,255) ." ,  ".rand(0,255)." , ". (rand(0,100)/100) .");";
                
                echo "background-color:" . displayRandomColor() . ";";
                
                ?>
                
            }
            
            h2 {
                background-color: <?=displayRandomColor()?>;
                color: <?=displayRandomColor()?>;
            }
            
        </style>
        
    </head>
    <body>
        
        <h1> Welcome!</h1>
        
        <h2> Good morning! </h2>

    </body>
</html>