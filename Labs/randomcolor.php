<?php
function displayRandomColor (){
return "background-color: rgba(" . rand(0,255) . ", " . rand(0,255) .", ". rand(0,255).", " .(rand(0,100)/100).")";
?>

 <!DOCTYPE html>
 <html>
     <head>
         <title>Random Background Color</title>
         <meta charset="utf-8" />
         <style>
          
               body{
                     <?php
                     
            
             echo "color: rgba(" . rand(0,255) . ", " . rand(0,255) .", ". rand(0,255).", " .(rand(0,100)/100).")";
             echo "background-color:" .displayRandomColor() . ";";
            
?>
}
h1{
    <?php 
    
    ?>
}
h2{ 
    background-color:<?=displayRandomColor()?>;
         </style>
     </head>
     <body>
         
  
         
        <h1>Welcome</h1>
         
     </body>
 </html>
