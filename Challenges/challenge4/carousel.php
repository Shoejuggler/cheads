<?php

    $backgroundImage ="img/sea.jpg";

    
    if (isset ($_GET['keyword'])) { 
        include 'api/pixabayAPI.php';
        $keyword = $_GET['keyword'];
        $imageURLs = getImageURLs($keyword);
        $backgroundImage = $imageURLs[array_rand($imageURLs)];
        
        include '../../dbConnection.php';
        $conn = getDatabaseConnection();
        $sql = "INSERT INTO `q_keywords` (`wordID`,`keywords`)
        VALUES ('null', '$keyword')";
        $stmt = $conn -> prepare ($sql);
        $stmt -> execute();
        
       
        $sql = "SELECT * FROM `q_keywords`";
        $stmt = $conn->query($sql);	
        $results = $stmt->fetchAll();
        $totalTimes=0;
        foreach ($results as $record) {
        if ($record['keywords']===$keyword){
            $totalTimes+=1;
            echo $record['keywords']  . " - " . $record['timeDate'] ."<br /><br />";
        }
            } echo $keyword ." was searched: " . $totalTimes. " times.";
    
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Slideshow </title>
        
        
       
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <style>
            @import url("css/styles.css");
            body{
                background-image: url(<?=$backgroundImage?>);
            }
        </style>
     
    </head>
    
    <body>
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
                <?php
                for ($i = 0; $i < 7; $i++) {
                    echo "<li data-target='#carousel-example-generic' data-slide-to=' $i'";
                    echo ($i == 0) ? "class='active'": "";
                    echo "></li>";
                }
                
                ?>
              
              </ol>
            
            
            
            <div class="carousel-inner" role="listbox">
              <?php
              for($i = 0; $i < 7; $i++) {
                  do {$randomIndex = rand(0, count($imagrURLs));
                  } while(!isset($imageURLs[$randomIndex]));
              
                  echo '<div class="item ';
                  echo ($i== 0) ? "active" : "";
                  echo '">';
                  echo '<img src="' . $imageURLs[$randomIndex] . '">';
                  echo '</div>';
                  unset($imagrURLs [$randomIndex]);
                  
                  
              }
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
            }  //endElse
        ?>
        <br>
       
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
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>