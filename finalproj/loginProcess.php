<?php
session_start();

   include 'dbConnection.php';
   $conn = getDatabaseConnection();
$username = $_POST['username'];
$password = sha1($_POST['password']);
//echo $password;
//Watch out! Sql injection risk
/*$sql = "SELECT *
FROM q_admin
WHERE username = '$username'
AND password = '$password'";*/

$sql = "SELECT *
FROM f_admin
WHERE username = :username
AND password = :password";

$namedParameters  = array();
$namedParameters[':username']  = $username;
$namedParameters[':password']  = $password;
$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC);
        
        
        
if (empty($record)) {
    echo "Wrong username or password";
    header("Location: login.php?login=false");
    exit; 
  
} else {
    header('Location: admin.php'); //redirects users to admin page
}

?>
