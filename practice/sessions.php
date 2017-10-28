<?php
session_start();

if (!isset($_SESSION['randomNumber'])) {
    
    $_SESSION['randomNumber'] = rand(1,100); 
    
}

$randomNumber = rand(1,100);

echo "Number to guess: " . $_SESSION['randomNumber'];
?>



<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <h1></h1>
        <form>
            Guess: <input type="type" name="guess"/> <br/>
            <input type="submit" name="submit"/>
            
        </form>
    </body>
</html>