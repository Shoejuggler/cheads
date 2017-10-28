<?php
include '../dbConnection.php';

$dbConn = getDatabaseConnection("midterm");

echo "female actresses: <br/ >";
$sql = "SELECT firstName, lastName, country_of_birth
		FROM celebrity
		WHERE gender = 'F'
		AND NOT country_of_birth = 'USA'
		ORDER BY `celebrity`.`lastName` ASC ";
		
		$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['lastName']  . " - " . $record['firstName'] .  " : " . $record['country_of_birth'] ."<br /><br />";
}

echo "Number of movies per category and their average duration: <br/ >";
$sql = "SELECT movie_category,
COUNT(movie_category) as 'num'
FROM movie
GROUP BY movie_category
		ORDER BY `num` ASC ";
			$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['movie_category']  . " - " . $record['num'] .  "<br /><br />";
}	
		
		echo "Top three longest movies released after 2000: <br/ >";
$sql = "SELECT movie_title, movie_category, duration, company, release_year
		FROM movie
        WHERE release_year >= '2000'
		ORDER BY `duration` DESC 
		LIMIT 3";
			$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['movie_title']  . " - " . $record['movie_category'] . " - " . $record['duration'] . " - " . $record['company'] ." - " . $record['release_year'] ."<br /><br />";
}	
		echo "List of actors and actresses who have not won an academy award: <br/ >";
$sql = "SELECT *
FROM oscar o
RIGHT JOIN celebrity c 
ON o.oscarId = c.celebrityId
WHERE o.celebrity_id IS NULL ";
			$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
		echo $record['lastName']  . " - " . $record['firstName'] ."<br /><br />";
}	

	echo "List of celebrities who have won an oscar: <br/ >";
$sql = "SELECT firstName, lastName, celebrityId, movie_title, award_category, award_year
FROM oscar o
JOIN celebrity c ON o.celebrity_id = c.celebrityId
JOIN movie m ON m.movieId = o.movieId 
JOIN award_category a on a.award_cat_id = o.award_cat_id
ORDER BY award_year ";
			$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
		echo $record['firstName']  . " - " . $record['lastName'] . " - " . $record['movie_title'] . " - " . $record['award_category'] ." - " . $record['award_year'] ."<br /><br />";
}	



?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
  
  <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:green">
      <td>1</td>
      <td>Name and country of birth of female actresses who were NOT born in the USA, ordered by last name</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="background-color:white">
      <td>2</td>
      <td>Number of movies per category and their average duration</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="background-color:green">
      <td>3</td>
      <td>All info about the top three longest movies released after 2000</td>
      <td width="20" align="center">15</td>
    </tr>     
     <tr style="background-color:white">
       <td>4</td>
       <td>List of  actors and actresses who have not won an academy award, ordered by last name </td>
       <td align="center">15</td>
     </tr>
     <tr style="background-color:green">
      <td>5</td>
      <td>List of celebrities who have won an oscar, ordered by "award_year". Include full name, movie title, oscar year, and award category.</td>
      <td width="20" align="center">15</td>
    </tr>     
     <tr style="background-color:green">
      <td>6</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b>57</b></td>
    </tr> 
  </tbody></table>    

    </body>
</html>