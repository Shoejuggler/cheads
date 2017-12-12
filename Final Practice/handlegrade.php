<?php
include 'dbconn.php';

$email = $_POST['email'];
$score = $_POST['score'];


$conn = getConnection('localhost', 'final', 'root');


$sql = "SELECT lastScore,attempts FROM quiz_attempts WHERE email = :email;
        INSERT INTO quiz_attempts(email, lastScore) VALUES(:email, :score) ON DUPLICATE KEY
        UPDATE lastScore = :score;";

$stmt = $conn -> prepare($sql);
$stmt ->execute(['email' => $email, 'score' => $score]);
$record = $stmt->fetch(PDO::FETCH_ASSOC);

if(isset($record)) {
    $record['attempts'] = $record['attempts'] + 1;
}
else {
    $record = [
        'lastScore' => null,
        'attempts' => 1,        
    ];
}


echo json_encode($record);

?>