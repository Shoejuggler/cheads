<?php
session_start(); //starts or resumes an existing session
include 'dbConnection.php';
$conn = getDatabaseConnection();



    function minComic(){
        global $conn;
        
        $sql = "SELECT MIN(releaseDate) min
            FROM f_comics
            WHERE 1";
            
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $result = $records[0];
    echo ("The oldest comic in the collection was printed in: " . $result['min'] . " ");
    }
    
    function maxComic(){
        global $conn;
        
        $sql = "SELECT MAX(releaseDate) max
            FROM f_comics
            WHERE 1";
            
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $result = $records[0];
    echo ("The newest comic in the collection was printed in: " . $result['max'] . " ");
    }
    
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Comic Dates</title>
        
        <style>
            h5{
                text-align: right;
            }
        </style>
    </head>
    
    <body>
        <div id=container>
        <h1>Find the newest and oldest comics in the collection</h1>
         <a href="admin.php">Back</a>
        <div id="showdates"></div>
        
        
         <fieldset>
           
            <form>
               <input type="submit" value="Oldest Comic" name="releaseDateMin">
            </form>
            <?php
                if (isset($_GET['releaseDate'])) { 
                minComic();
                }
            ?>
            
            <form>
               <input type="submit" value="Newest Comic" name="releaseDateMax">
            </form>
            <?php
                if (isset($_GET['releaseDate'])) { 
                maxComic();
                }
            ?>
            
            
        </fieldset>
        <br /><br />
        
</div>

    </body>

</html>