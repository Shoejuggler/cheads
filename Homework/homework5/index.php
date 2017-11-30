<!DOCTYPE html>
<html>

<head>
    <title>Cory's CRAZY Cuh-WIZ</title>
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/function.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <style>
             @import url("css/styles.css");
             
         </style>
</head>

<body class="background">
    <div id="problems">
    <div class="header">
    
        <header>
    <h1>Can you beat the this quiz, and get the highest score possible?
        <br> Let's see what you've got!</h1>
        </header>
        <br>
        <br>
        </div>

    <form id="quiz" name="quiz">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <p>Is this a Test or a Quiz?</p>
        <input type="radio" name="question1" value="a" required>This is a Test
        <input type="radio" name="question1" value="b" required>This is a Quiz
        <br>
        <p id="correct1"></p>
        <br>
        <p id="incorrect1"></p>
        <br><br>
        <p>How do you spell: Mississippi backwards?</p>
        <input type="text" name="question2" placeholder="Spell Here"  required>
        <br>
        <p id="correct2"></p>
        <br>
        <p id="incorrect2"></p>
        <br><br>
        <p>Who is my favorite comic book character?</p>
        <select required name="question3" required>
                <option value="">Select Category</option>
                <option value="Man-Thing">Man-Thing</option>
                <option value="Beta-Ray Bill">Beta-Ray Bill</option>
                <option value="Lum">Lum</option>
                <option value="Plastic Man">Plastic Man</option>
                <option value="all">All of the above</option>

            </select>
        <br>
        <p id="correct3"></p>
        <br>
        <p id="incorrect3"></p>
        <br><br>
        <p>What is my favorite color?</p>
        <input type="text" name="question4" placeholder="Spell Here"  required>
        <br>
        <p id="correct4"></p>
        <br>
        <p id="incorrect4"></p>
        <br><br>
        <p>About what time am I going to have Thanksgiving dinner this year?</p>
        <input type="radio" name="question5" value = "a"> 5:00PM
        <input type="radio" name="question5" value = "b"> 8:00PM
        <input type="radio" name="question5" value = "c"> I'm actually going to skip out on dinner to sit in line for Black Friday!
       <br>
        <p id="correct5"></p>
        <br>
        <p id="incorrect5"></p>
        <br><br>
        <p>How many fingers am I holding up?</p>
        <input type="number" name="question6" min="0" max="10">
        <br>
        <p id="correct6"></p>
        <br>
        <p id="incorrect6"></p>
        <br><br>
        <input type ="button" id="button" value= "submit" onclick="check();">
    </form>

    <div id="result">
        <p id= "score"></p>
        <p id= "message"></p>
        <br>
        <br>
        </div>
        
        <script>
            
             $(document).on('click','#button',function(e) {
  var data = $("#quiz").serialize();
  $.ajax({
         data: data,
         type: "GET",
         url: "tally.php",
         success: function(data){
              alert("Data Save: " + data);
         }
});
 });
            
        </script>
        <br /><br />

        <?php
        
        
session_start();
//always put session start to store user data.
include '../../dbConnection.php';

$conn = getDatabaseConnection();
$sql= "SELECT userID,date,total 
FROM q_quiz
WHERE timestamp = (SELECT MAX(timestamp)";
$stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    foreach ($results as $record) {
	echo $record['userID']  . " got " . $record['total'] .  " points on " . $record['date'] ."<br /><br />";
   
    }
    ?>
        
        
        
        
        
    </div>
</body>

</html>