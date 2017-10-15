<?php

$zodiac = array("rat", "ox", "tiger", "rabbit", "dragon", "snake", "horse", "monkey", "rooster", "goat", "pig" );
$task=$_GET['task'];


function zodiacList($startYear=1900, $endYear=1950, $jump=1){
 global $zodiac;
 
 if (isset($_GET['startYear'])) {
     $startYear = $_GET['startYear'];
     $endYear = $_GET['endYear'];
 }
 $zodiacIndex =0;
 for ($i=$startYear; $i < $endYear; $i +=$jump){
     
 } 
 echo'<h2> Chinese Zodiac </h2>';
        $yearSum=0;

for ($i = $startYear; $i <= $endYear; $i++) {
     echo "<li>" .  "Year $i" ; 
    
        if ($i == 1776) {
           echo " USA INDEPENDENCE!" ;
        }    
        if ($i%100 == 0){
            echo " New Century!";
        } else {
            
        }
        echo  "</li> ";
        $yearSum= $yearSum + $i;
        
        
    }
    


}
?>



<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
     
    <h1> Chinese Zodiac Tasks</h1>
    
    <ul>
        
        <?php
        
        zodiacList(1500,2000);
        
        ?>
        <h3> Som of Years: <?=$yearSum ?></h3>
       
        
    </ul>

    </body>
</html>