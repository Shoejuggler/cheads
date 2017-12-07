<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <style>
             @import url("css/styles.css");
             
         </style>
  
    </head>
    <body>

<h1> Admin Login</h1>
<form method="POST" action="loginProcess.php">
    Username:<input type="text" name="username"/> Use: "user1" or "admin"<br/>
    Password:<input type="password" name="password"/> Use: "user1" or "admin"<br/>
    <input type="submit" value="login!" name="loginform"/>
    
</form>
    </body>
</html>
<?php
if($_GET['loginfail'] == "false"){
    echo '<h3>BZZT! Try Again! </h3>';
}

?>