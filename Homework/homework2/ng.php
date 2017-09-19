



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

$names = array('Christopher','Ryan','Ethan','John','Zoey','Sarah','Michelle','Samantha',);

$surnames = array('Walker','Thompson', 'Anderson','Johnson','Tremblay','Peltier', 'Cunningham', 'Simpson', 'Mercado', 'Sellers', 'Ryan');

function randomGenerator($random_name, $random_surname){
$random_name = $names;
$random_surname = $surnames;


if ($names == $surnames){
   randomGenerator();
} else{
 echo $random_name . ' ' . $random_surname;
}


}
for ($i=0; $i< 1; $i++) {
${"rand" . $i}= rand(0, 4);
}
print randomGenerator();
?>
</div>
    </body>
</html>