


<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
         <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
         <link rel="stylesheet" type="text/css" href="style.css"> 
         <style>
             @import url("css/styles.css");
             
         </style>
    </head>
    <body>
        <div id= "shell">
    <h1>Enter Your Information <br> To Create a Sticky Note Reminder</h1>
 <form>
            
            <input type="text" name="keyword" placeholder="Name of Assignment" required>
            
            <input  type="radio" name="priority" value="Low Priority" required> Low Priority
            
            <input  type="radio" name="priority" value="High Priority" required>High Priority <br/>
            
              Date & Time: <input type="datetime-local" name="date" required/> 
            
            <select  required name="type" required>
                <option value="">Select Category</option>
                <option value="Solo">Solo Assignment</option>
                <option value="Group">Group Assignment</option>
                <option value="Survey">Public Survey</option>
                <option value="Presentation">Presentation</option>
                <option value="Test">Test</option>
            </select>    
            <br/>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset Reminder">
        </form>
        <div id="notebook">
        <?php

    
    
  if (isset ($_GET['priority'])) { 
     
       
       if ($_GET['priority'] == "Low Priority"){
           echo "<image src= 'img/uncool.png'>" . "<br/>" .  "Trick question!" . "<br/>" . "Get a better work ethic!";
       } 
       else {
       echo "Dont forget to finish: " . $_GET['keyword'] . "<br />";
       echo "This is a " . $_GET['priority'] . " " . $_GET['type'] . " Assignment" . "<br/>";
       echo "That is due on " . $_GET['date'] . "<br />";
       } 

  } 
    


?>
</div>
</div>
    </body>
</html>