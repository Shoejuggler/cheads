<!DOCTYPE html>
<!-- saved from url=(0080)https://ilearn.csumb.edu/pluginfile.php/721164/mod_resource/content/0/index.html -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>AJAX: Sign Up Page</title>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <script>
        


        function checkPassword() {
            if (signup.pass1.value == "") {
                 $('#password1').append('Please type password');
                  $('#password1').css('color', 'red');
            }


            if (signup.pass2.value == "") {
                 $('#password2').append('Please type password');
                  $('#password2').css('color', 'red');
            }
            if (signup.pass2.value != signup.pass1.value) {
                
                $('#password1').append('Passwords do not match. Please retype password');
                 $('#password2').append('Passwords do not match. Please retype password');
                $('#password1').css('color', 'red');
                 $('#password2').css('color', 'red');
            }

            return true;
        }
    </script>
    
    <!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <style>
             @import url("css/styles.css");
             
         </style>
  
    </head>
    <body>

<h1> Admin Login</h1>
<form method="POST" action="loginProcess.php">
    Username:<input type="text" name="username"/> Use: "user1" or "admin"<br/>
    Password:<input type="password" name="password"/> Use: "user1" or "admin"<br/>
    <input type="submit" value="login!" name="loginform" onclick="checkPassword();checkZip();"/>
    
</form>
   
  <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
     <tr style="background-color:##99E999">
      <td>1</td>
      <td>The program includes a login form with username and password elements.</td>
      <td width="20" align="center">3</td>
     </tr>     
     <tr style="background-color:#FFC0C0">
      <td>2</td>
      <td>After typing the username, the number of days left to change the password is shown in orange if the value of daysLeftPwdChange is between 1 and 15</td>
      <td width="20" align="center">7</td>
    </tr>     
     <tr style="background-color:#FFC0C0">
      <td>3</td>
      <td>After typing the username, the right error message is shown in red if the value of daysLeftPwdChange is 0</td>
      <td width="20" align="center">7</td>
    </tr>     
     <tr style="background-color:#FFC0C0">
      <td>4</td>
      <td>After typing the username, the right error message is shown in red if the value of failedAttempts is 3</td>
      <td width="20" align="center">7</td>
    </tr>     
     <tr style="background-color:#FFC0C0">
      <td>5</td>
      <td>After typing the username, the Submit button should be disabled/hidden if an error message is shown in red </td>
      <td width="20" align="center">3</td>
    </tr>     

     <tr style="background-color:#FFC0C0">
      <td>6</td>
      <td>Validate that the username is not left blank in order to submit the form, using JavaScript</td>
      <td width="20" align="center">5</td>
    </tr>
     
     <tr style="background-color:#FFC0C0">
      <td>7</td>
      <td>Increase the value of "failedAttempts" if users type the wrong password for a specific username</td>
      <td width="20" align="center">10</td>
    </tr> 

     <tr style="background-color:#99E999">
      <td>8</td>
      <td>This rubric is properly included AND UPDATED</td>
      <td width="20" align="center">2</td>
    </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center">5</td>
    </tr> 
  </tbody></table>
    </body>
</html>
