<?php
session_start();
//always put session start to store user data.
include '../../dbConnection.php';
$score = $_GET['score'];
$conn = getDatabaseConnection();
$sql = "INSERT INTO `q_quiz` (`userID`, `total`) 
VALUES ('".$_SESSION['username']."', '$score')";
$stmt = $conn -> prepare ($sql);
$stmt -> execute();
$sql= "SELECT avg(total) as average,
COUNT mainID
FROM q_quiz
WHERE userID = ".$_SESSION['userID']."";   
    
?>