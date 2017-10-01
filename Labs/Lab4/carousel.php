




<?php
    $backgroundImg = "img/sea.jpg"; 
    

    
    if (isset ($_GET['keyword'])) { 
        
        include 'api/pixabayAPI.php'; 
        $imageURLs = getImageURLs($_GET['keyword']); 
        $backgroundImg = $imageURLs[array_rand($imageURLs)]; 
        
        
    
        $keyword = $_GET['keyword']; 
        
        if (!empty($_GET['category']) ) {  
          $keyword = $_GET['category']; 
        }
        
        if (isset($_GET['layout'])) { 
          $imageURLs = getImageURLs($keyword, $_GET['layout']);
        } else {
           $imageURLs = getImageURLs($keyword);
        }
        
    } // If


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 4 Pixabay Slideshow </title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        
       
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        
        <style>
            @import url('css/styles.css');
            body {
                background-image: url('<?=$backgroundImg?>'); /* set background img to whatever value of $backgroundImg is */
                background-size: cover;
            }
            
            form{
                color:black;
                background-color: gray;
                
            }
        </style>
    </head>
    
    <body>
        <br /><br />
        <form>
            
            <input type="text" name="keyword" placeholder="Keyword" required>
            
            <input id="lhorizontal" type="radio" name="layout" value="horizontal"/>
            <label for="lhorizontal">Horizontal</label>
            
            <input id="lvertical" type="radio" name="layout" value="vertical" /> 
            <label for="lvertical">Vertical</label>
            
            <select  required name="category">
                <option value="">Select Category</option>
                <option value="ocean">Sea</option>
                <option value="forest">Forest</option>
                <option value="snow">Snow</option>
            </select>    
            
            <input type="submit" value="Submit">
        </form>
        <?php

            if(!isset($imageURLs)) { 
                
                echo "<h2>Type a keyword to display a slideshow <br /> with random images from Pixabay.com</h2>";
            } 
            else { 
                

        ?>
        
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            
            <ol class="carousel-indicators">
                <?php
                    for ($i = 0; $i < 7; $i++) {
                        echo "<li data-target='#carousel-example-generic' data-slide-to='$i'";
                        echo ($i == 0)?" class='active'": "";
                        echo "></li>";
                    }
                ?>
            </ol>
            
            
            <div class="carousel-inner" role="listbox">
                <?php
                    for ($i = 0; $i < 5; $i++) {
                        do {
                            $randomIndex = rand(0, count($imageURLs));
                        }
                        while (!isset($imageURLs[$randomIndex]));
                        
                        echo '<div class="item ';
                        echo ($i == 0)?"active": "";
                        echo '">';
                        echo '<img src="' . $imageURLs[$randomIndex] . '">';
                        echo '</div>';
                        unset($imageURLs[$randomIndex]);
                    } // end of for loop
                ?>
            </div>
            
            
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
        
        <?php
            } 
        ?>
        
       
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>