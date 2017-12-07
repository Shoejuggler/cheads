<?php

include 'dbConnection.php';
$dbConn = getDatabaseConnection();

        function displayGenres() {
            global $dbConn;
            $sql = "SELECT DISTINCT genre, genreID  
                    FROM `f_genre` 
                    ORDER BY genre";
                    
            $stmt = $dbConn -> prepare($sql);
            $stmt -> execute();
            $records = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            
                foreach($records as $record) {
                    echo "<option value='".$record['genreID']."'";
                    
                    if ($record['genre'] == $_GET['genre']) {
                        echo "selected";
                    } 
                    echo ">" . $record['genre'] . "</option>";
                }
        }
        
        
 
 if (isset($_GET['addForm'])) { //checks if form was submitted
     
    // include 'calls/dbConnection.php';
    // $dbConn = getDatabaseConnection();
    
    $sql = "SELECT * FROM f_comics";
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($np);
    $records = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    $length = count($records);
    
     $sql = "INSERT INTO f_comics (comicName, cover, publisher, releaseDate, genreID)  
            VALUES (:name,:image,:publisher,:published,:genre)";
            // ON DUPLICATE KEY UPDATE bookName=VALUES(bookName), bookAuthor=VALUES(bookAuthor), bookPrice=VALUES(bookPrice), 
            // bookImage=VALUES(bookImage), bookPublisher=VALUES(bookPublisher), bookPublished=VALUES(bookPublished),  bookPages=VALUES(bookPages)";


     $np = array();
    // $np[":length"]  = $length;
     $np[":name"]  = $_GET['comicName'];
     $np[":image"]  = $_GET['cover'];
     $np[":publisher"]  = $_GET['publisher'];
     $np[":published"]  = $_GET['releaseDate'];
     $np[":genre"] = $_GET['genre'];

     
     $stmt = $dbConn->prepare($sql);
     $stmt->execute($np);
     
     echo "Comic added!";
     
 }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add Your Favorite Comic</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
        <link href="css/stylesEdit.css" rel="stylesheet">
    </head>
    <body>

        <h1> Go ahead and add your favorite comic to the "Hall of Fame"! </h1>
        
        <form id="goBack" action="admin.php">
            <input type="submit" value="Go Back" class="btn"/>
        </form><br/><br/>
        
        
        <form>
            <fieldset>
            <!--<legend> Adding New Book </legend>-->
            <table>
                
                 <tr>
                    <td>Title: </td>
                    <td><input class="width" type="text" name="comicName"/></td>
                </tr>
                
             
                 <tr>
                    <td>Cover URL: </td>
                    <td><input class="width" type="text" name="cover"/></td>
                </tr>
                <tr>
                    <td>Publisher: </td>
                    <td><input class="width" type="text" name="publisher"/></td>
                </tr>
                <tr>
                    <td>Publish Year: </td>
                    <td><input class="width" type="text" name="comicPublished"/></td>
                </tr>

            
                
                <!--Title: <input type="text" name="bookName"/> <br />-->
                <!--Author: <input type="text" name="bookAuthor"/> <br />-->
                <!--Price: <input type="text" name="bookPrice"/> <br />-->
                <!--Picture URL: <input type="text" name="bookImage"/><br>-->
                <!--Publisher: <input type="text" name="bookPublisher"/><br /> -->
                <!--Publish Year: <input type="text" name="bookPublished"/><br /> -->
                <!--Pages: <input type="text" name="bookPages"/><br /> -->
                
                
                <tr><td><strong>Select a Genre:</strong></td></tr>
                <td><select name="genre" id="genre">
                    <option disabled selected value>--Select a Genre--</option>
                    <?=displayGenres()?>
                </select></td>
                
                
              
                    <td><input type="submit" value="Add Book" name="addForm" class="btn btn-success"></td>
                </tr>
                
                </table>
            </fieldset>
        </form>
            
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>