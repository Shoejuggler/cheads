<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <style>
             @import url("css/styles.css");
            
            body {
                text-align: center;
            }
            fieldset{
                margin-left: 10%;
                margin-right: 10%;
            }
        </style>
         </style>
  
    </head>
    <body>
<div id="login">
<h2>See my list of "The Greatest Comics Ever Created" <a href="index.php">Here</a>!</h2>



<h2> Want to add a book to the list? Log in with your credentials.</h2>
<form method="POST" action="loginProcess.php">
    Username:<input type="text" name="username"/> Use: "user1" or "admin"<br/>
    Password:<input type="password" name="password"/> Use: "user1" or "admin"<br/>
    <input type="submit" value="login!" name="loginform"/>
    
</form>
</div>

    </body>
</html>
<?php
if($_GET['loginfail'] == "false"){
    echo '<h3>BZZT! Try Again! </h3>';
}

?>