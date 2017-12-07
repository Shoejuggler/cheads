<?php

include 'dbConnection.php';
$dbConn = getDatabaseConnection();

$sql = "DELETE FROM f_comics 
        WHERE comicID = " . $_GET['id'];

$stmt = $dbConn->prepare($sql);
$stmt->execute();

header('Location: admin.php');

?>