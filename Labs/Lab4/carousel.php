<?php

    

    
    if (isset ($_GET['keyword'])) { 
        
       echo "keyword typed: " . $_GET['keyword'] . "<br />";
       echo "layout selected:" . $_GET['layout'] . "<br />";
       echo "category selected: " . $_GET['category'] . "<br />";
        
        
    
        $keyword = $_GET['keyword']; 
        
        if (!empty($_GET['category']) ) {  
          $keyword = $_GET['category']; 
        }
        include 'api/pixabayAPI.php';
        
        if (isset($_GET['layout'])) { 
          $imageURLs = getImageURLs($keyword, $_GET['layout']);
        } else {
           $imageURLs = getImageURLs($keyword);
        }
        
    } 


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Slideshow </title>
        
        
       
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        
     
    </head>
    
    <body>
        
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

            if(!isset($_GET["keyword"])) { 
                
                echo "<h2>Type a keyword to display a slideshow <br /> with random images from Pixabay.com</h2>";
            } 
            else { if (empty($_GET['keyword']) && empty ($_GET['category'])) {
 
 
            echo "<h2 style='color:red'> Please enter a keyword!</h2>"; 
            return;
            exit;
}

        shuffle($imageURLs);
        ?>
        
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            
            <ol class="carousel-indicators">
                 <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
            </ol>
            
            
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="<?=$imageURLs[0]?>" alt="...">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
                <div class="item">
                  <img src="<?=$imageURLs[1]?>" alt="...">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
                <div class="item">
                  <img src="<?=$imageURLs[2]?>" alt="...">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div> 
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