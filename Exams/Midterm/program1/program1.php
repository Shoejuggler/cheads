<!DOCTYPE html>
<html>
    <head>
        <title>Winter Vacation Planner </title>
         <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    <body>
        <div class="head">
        <header><h1>Winter Vacation Planner:</h1></header>
        <div id="forms">
            
            <form>
                
            Select Month:
             <select name="month" required>
                <option value="">Month</option>
                <option value="nov">November</option>
                <option value="dec">Group Assignment</option>
                <option value="jan">January</option>
                <option value="feb">Febuary</option>
            </select>    
            <br>
            <br>
            Number of Locations:
            <input  type="radio" name="days" value="three" required> Three
            <input  type="radio" name="days" value="four" required> Four
            <input  type="radio" name="days" value="five" required> Five
            <br>
            <br>
            Select Country:
            <select name="country" required>
                <option value="usa">USA</option>
                <option value="mex">Mexico</option>
                <option value="nor">Norway</option>
                <br>
            <br>
            Visit Locations in Alphbetical Order:
            <input  type="radio" name="order" value="az" required> A-Z
            <input  type="radio" name="order" value="za" required> Z-A
            </select>    
            <br>
            <br>
            <input type="submit" value="Submit">
            </form>
    
        </div>
</div>
<div>
      
						    <table border="1" width="600">
						    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
						    <tr style="background-color:green">
						      <td>1</td>
						      <td>The page includes the form elements as the Program Sample: dropdown menu, radio buttons, etc.</td>
						      <td width="20" align="center">3</td>
						    </tr>
						    <tr style="background-color:green">
						      <td>2</td>
						      <td>Errors are displayed if country or number of locations are not submitted.</td>
						      <td width="20" align="center">5</td>
						    </tr> 
						    <tr style="background-color:green">
						      <td>3</td>
						      <td>Header and Subheader are displayed when submitting the form with all data. </td>
						      <td align="center">5</td>
						    </tr>    
							<tr style="background-color:#FFC0C0">
						      <td>4</td>
						      <td>A table with days and weeks is displayed when submitting the form</td>
						      <td align="center">10</td>
						    </tr> 
						    <tr style="background-color:#FFC0C0">
						      <td>5</td>
						      <td>The number of days in the table correspond to the month selected</td>
						      <td align="center">10</td>
						    </tr>
						    <tr style="background-color:#FFC0C0">
						      <td>6</td>
						      <td>Random images are displayed in random days</td>
						      <td align="center">5</td>
						    </tr>       
						    <tr style="background-color:#FFC0C0">
						      <td>7</td>
						      <td>The number of random images correspond to the number of locations and country submitted</td>
						      <td align="center">10</td>
						    </tr>  
						    <tr style="background-color:#FFC0C0">
						      <td>8</td>
						      <td>The proper name of the location is displayed below the image (e.g. "New York", "Las Vegas") </td>
						      <td align="center">10</td>
						    </tr>  
						    <tr style="background-color:#FFC0C0">
						      <td>9</td>
						      <td>Random locations should be ordered alphabetically, if user checks corresponding radio button (A-Z or Z-A). </td>
						      <td align="center">15</td>
						    </tr>        
						    <tr style="background-color:green">
						      <td>10</td>
						      <td>The web page uses Bootstrap and has a nice look. </td>
						      <td align="center">5</td>
						    </tr>        
						    <tr style="background-color:green">
						      <td>11</td>
						      <td>This rubric is properly included AND UPDATED (BONUS)</td>
						      <td width="20" align="center">2</td>
						    </tr>     
						     <tr>
						      <td></td>
						      <td>T O T A L </td>
						      <td width="20" align="center"><b>20</b></td>
						    </tr> 
						  </tbody></table>
						
</div>
    </body>
</html>