<?php

include '../../dbConnection.php';

$dbConn = getDatabaseConnection();






function getRandomQuote() {
    
    global $dbConn;

    $sql = "SELECT quoteId FROM q_quote";  
    
    $stmt = $dbConn -> prepare ($sql);
    
    $stmt -> execute();
    
    $records = $stmt -> fetchAll();  
    
    $randomIndex = array_rand($records);
    
    $quoteId = $records[$randomIndex]['quoteId']; //makes sure there is one quote
    
    //rand(0,count($records)); //$records just gets everything in an undefined manner
 $sql = "SELECT firstName, lastName, authorId, quote 
            FROM q_quote
            NATURAL JOIN q_author
            WHERE quoteId = $quoteId";
    $stmt = $dbConn -> prepare ($sql);
    $stmt -> execute();
    $records = $stmt -> fetch(); //using "fetch()" because it's expected to get ONLY ONE record        
    
     //fetch for single record
    
    echo $records ['quote'] . "<br/>";
    echo"<a target='authorInfo' href='getAuthorInfo.php?authorId=".$records['authorId']."'>-" . $records['firstName'] ." " . ['lastName'];;
    
}



?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 5: Random Famous Quote Generator </title>
    </head>
    <body>


    <?php
    getRandomQuote()
    ?>        
<br/>
<iframe name="authorInfo" width="500" height ="300"></iframe>

    </body>
</html>