<?php

$result;

$names = array('Christopher','Ryan','Ethan','John','Zoey','Sarah','Michelle','Samantha','Walker','Thompson', 'Anderson','Johnson','Tremblay','Peltier', 'Cunningham', 'Simpson', 'Mercado', 'Sellers', 'Ryan');




function generateName($names){
    global $result;
    $result = $firstName[$names].'  ' . $lastName[$names];
    echo "Witness Protection has assigned you the new identety of: $result";
    


}
for ($i=0; $i< 1; $i++) {
 $rand = rand(0,20);
 generateName($result);
}
?>



<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    <body>
    <body class="orange-background">
    <div id="cornerz">
    <div class="head">
<?php
echo generateName();
?>
</div>
    </body>
</html>