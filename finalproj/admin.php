<?php


session_start();

//print_r($_SESSION);

if (!isset($_SESSION['username'])) { //if not set, it means that admin hasn't logged in
    
    header("Location: index.php"); //redirects users to login page
    exit;
    
}
  include 'dbConnection.php';
    $dbConn = getDatabaseConnection();

 function displayGenres() {
            global $dbConn;
            $sql = "SELECT genre, genreID  
                    FROM `f_genre` 
                    ORDER BY genre";
                    
            $stmt = $dbConn -> prepare($sql);
            $stmt -> execute();
            $records = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            
                foreach($records as $record) {
                    // echo "<option vak>".$record['genreName']."</option>";
                    echo "<option value='".$record['genreID']."'";
                    
                    if ($record['genre'] == $_GET['genre']) {
                        echo "selected";
                    } 
                    echo ">" . $record['genre'] . "</option>";
                }
        }








?>

<!DOCTYPE html>
<html>
    <head>
        <title>Final Project</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=IM+Fell+Double+Pica+SC|Risque" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
          <link href="css/styles.css" rel="stylesheet">
        
         <script>
            function confirmDelete() {
                
                return confirm("Are you sure you want to get rid of this book? It's really good...");
            }            
        </script>

    </head>
    <body>

      <div class="container">
        
        <form id="libraryForm" method="get">
    
            <div id="library">You have special permission to edit this list.<br> Please don't delete everything, please.</div>

            <div class="select-style">
                <strong>Pick a Genre:</strong>  
                <select name="genre" id="genre" onchange="getComic()">
                    <option disabled selected value>--Select Genre--</option>
                    <?=displayGenres()?>
                </select>
            </div>
            
            <br><br>
            
            <table id="comics">
                <thead ><tr>
                    <th>Title: </th>
                    <th>Author: </th>
                    <th>Artist: </th>
                    <th>Cover: </th>
                    <th>Publisher: </th>
                    <th>Publish Year: </th>
                    <th>Edit: </th>
                    <th>Delete: </th>
                </tr></thead>
                <tbody>
                    
                </tbody>
            </table>
    
        </form>
      
          <form id="logout" action="logout.php">
            <input type="submit" value="Logout" class="btn btn-warning"/>
        </form>
        <form id="addcomic" action="addcomic.php">
            <input type="submit" value="Add New Book" class="btn btn-success"/>
        </form>
        
        <form action="comicreport.php">
    <input type="submit" value="Generate Reports" class="btn btn-success"/>
</form>
        <br/><br/>
       </div>
        
        
   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script>
        function getComic() {
                    $.ajax({

                        type: "GET",
                        url: "comicAjax.php",
                        dataType: "json",
                        data: { "genreID": $("#genre").val(), 
                        "comicName": $("#comic_name").val()
                    },
                        success: function(data,status) {
                        //console.log(data);
                         $('#comics').find('tbody').empty();
                        for(var i=0; i<data.length;i++) {
                            // console.log(data[i].bookName);
                            $('#comics').find('tbody').append('<tr><td>'+data[i].comicName+
                            '</td><td>'+data[i].autName+'</td><td>'+data[i].artName+' </td><td><img src='+data[i].cover+' height="220" width="200"></td><td>'
                            +data[i].publisher+' </td><td>'+data[i].releaseDate+'</td><td><a href="editcomic.php?id='
                            +data[i].comicID+'">Edit comic</a></td><td><a href="deletecomic.php?id='+data[i].comicID+'" >Delete comic</a></td></tr>');
                        }
                        },
                        complete: function(data,status) { //optional, used for debugging purposes
                        //alert(status);
                        }
                        
                    });//ajax
        }
    </script>
    
    </body>
</html>