<?php
include '../dbConnection.php';

$dbConn = getDatabaseConnection("midterm");

echo "Female Students: <br/ >";
$sql = "SELECT firstName, lastName
		FROM m_students
		WHERE gender = 'F'
		ORDER BY `m_students`.`lastName` ASC ";
		
		$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['lastName']  . " - " . $record['firstName'] .  "<br /><br />";
}

echo "Grades Lower Than 50: <br/ >";
$sql = "SELECT firstName, lastName, studentId, grade
		FROM m_students
		Natural JOIN m_gradebook
		WHERE grade <= '50'
		ORDER BY `grade` ASC ";
			$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['lastName']  . " - " . $record['firstName'] ." : " . $record['grade'] .  "<br /><br />";
}	
		
		echo "List of assignments that have not been graded: <br/ >";
$sql = "SELECT * FROM celebrity
LEFT JOIN oscar 
ON oscarId = celebrityId
WHERE oscarId IS NULL ";
			$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['title']  . " - " . $record['dueDate'] ."<br /><br />";
}	

			echo "Gradebook: <br/ >";
$sql = "SELECT title, firstName, lastName, studentId, assignmentId 
FROM `m_students`
NATURAL JOIN m_gradebook
NATURAL JOIN m_assignments
ORDER BY lastName, title ";
			$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['lastName']  . " - " . $record['firstName'] ." : " . $record['title'] . " - " . $record['grade'] ."<br /><br />";
}	
		
		
		
		
		
	
		
		
		
		
?>



<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>
  
  <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:green">
      <td>1</td>
      <td>A report shows all female students ordered by last name, from A to Z</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="background-color:green">
      <td>2</td>
      <td>A report shows students  that have  assignments with a grade lower than 50, ordered by grade, in ascending order</td>
      <td width="20" align="center">15</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>3</td>
      <td>A report lists those assignments that have not been graded and their due date, ordered by due date, ascending</td>
      <td width="20" align="center">15</td>
    </tr>     
     <tr style="background-color:green">
       <td>4</td>
       <td>A report shows the Gradebook, which includes first name, last name, assignment title, and grade. It should be ordered by last name and assignment title </td>
       <td align="center">15</td>
     </tr>
     <tr style="background-color:#FFC0C0">
      <td>5</td>
      <td>A report lists each student along with his/her average grade, ordered by average grade, from highest to lowest</td>
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
      <td width="20" align="center"><b>40</b></td>
    </tr> 
  </tbody></table>    
