<?php

// session_start();

// if (!isset($_SESSION['username'])) { //checks whether admin has already logged in
    
//     header("Location: index.php");
//     exit;
    
// }

include 'dbConnection.php';
$dbConn = getDatabaseConnection();

function comicInfo() {
    global $dbConn;
        
    $sql = "SELECT *
            FROM f_comics
            WHERE comicID = " . $_GET['id'];    
     
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);
    $record = $stmt->fetch(PDO::FETCH_ASSOC); 
    return $record;
}

if (isset($_GET['updateForm'])) { //Admin submitted update form
    
    //echo "Update form was submitted!";
    
    $sql = "UPDATE f_comics SET 
            comicName = :name,
            cover = :cover,
            publisher = :publisher,
            releaseDate = :published
        WHERE comicID = :comicID";
    //  print_r($_GET['bookPublished']);

     $namedParameters = array();
     $namedParameters[":name"]  = $_GET['comicName'];
     $namedParameters[":cover"]  = $_GET['cover'];
     $namedParameters[":publisher"]  = $_GET['publisher'];
     $namedParameters[":published"]  = $_GET['releaseDate'];
     $namedParameters[":comicID"]  = $_GET['id'];



     $stmt = $dbConn->prepare($sql);
     $stmt->execute($namedParameters);

     echo "comic updated!";
     
    
    
}


if (isset($_GET['id'])) {
    
    $getComicInfo = comicInfo();  

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Edit Comic</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
        <link href="css/stylesEdit.css" rel="stylesheet">
    </head>
    <body>

        <h1> Did we make a mistake? Do us a solid and correct it here. </h1>
        
        <form id="goBack" action="admin.php">
            <input type="submit" value="Go Back" class="btn"/>
        </form><br/><br/>
        
        <form>
            <fieldset>
                <!--<legend> Adding New Book </legend>-->
                    <table>
      
                    <input type="hidden" name="id" value="<?= $getComicInfo['comicID']?>">
                    
                    <tr>
                        <td>Title: </td>
                        <td><input class="width" type="text" name="comicName" value="<?= $getComicInfo['comicName']?>" /></td>
                    </tr>
                    
                     <tr>
                        <td>Picture URL: </td>
                        <td><input class="width" type="text" name="comicCover" value="<?= $getComicInfo['cover']?>"/></td>
                    </tr>
                    
                    <tr>
                        <td>Publisher: </td>
                        <td><input class="width" type="text" name="comicPublisher" value="<?= $getComicInfo['publisher']?>" /></td>
                    </tr>
                    
                     <tr>
                        <td>Publish Year: </td>
                        <td><input class="width" type="text" name="comicPublished" value="<?= $getComicInfo['releaseDate']?>" /></td>
                    </tr>

                        
                    <tr>
                        <td><input type="submit" value="Update Book" name="updateForm" class="btn btn-success"></td>
                    </tr>
            
                </table>
            </fieldset>
        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>