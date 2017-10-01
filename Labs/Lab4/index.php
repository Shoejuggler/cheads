<?php

$backgroundImage = "img/sea.jpg";

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 4. Pixabay Slideshow </title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <style>
            @import url('css/styles.css');
            
            body {
                background-image: url('<?=$backgroundImage?>');
            }
            
        </style>
        
    </head>
    <body>

       <?php
       
       if (isset($_GET["keyword"]) ) { 
         
         
         include 'api/pixabayAPI.php';
         $imageURLs = getImageURLs($_GET['keyword']);
        
       }
         
         
         
         ?>
         <form method="GET">
            
            <input type="text" name="keyword" placeholder="Type keyword"/>
            <input type="submit" />
            
        </form> 
        <?php
        
       
        for ($i=0; $i<5; $i++){
             do{
                 $randomIndex = rand(0,count($imageURLs));
             } while (!isset($imageURLs[$randomIndex]));
             echo "<img src='" . $imageURLs[$randomIndex] . "' width='200' >";
             unset($imageURLs[$randomIndex]);
         }
        
         
       
       
       
       
        if (!isset($imageURLs)) {  
            
          echo "<h2> Type a keyword to display a slideshow 
                with random images from Pixabay.com </h2>" ;   
            
        } 
        
        ?>



               

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    
    </body>
</html>