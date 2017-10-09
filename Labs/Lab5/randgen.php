<?php
$host='localhost';
$dbname= 'Quotes';
$username= 'root';
$password= '';
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
function dudeMagnet(){
    global $dbConn;
$sql= "SELECT * FROM q_author WHERE gender = 'M'";

$stmt = $dbConn -> prepare ($sql);
$stmt -> execute ();

while ($row = $stmt -> fetch()) {
    echo $row['firstname'] . "," . $row['lastname'] . "" . $row['gender'] . "<br />";
}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Random Quote Generator </title>
    </head>
    <body>
<?=
dudeMagnet();
?>
    </body>
</html>