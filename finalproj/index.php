<?php


 
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
    
            <div id="library">Behold! The Greatest Comics Known to Grace Mortal Man!</div>

            <div class="select-style">
                <strong>Pick a Genre:</strong>  
                <select name="genre" id="genre" onchange="getComic()">
                    <option disabled selected value>--Select Genre--</option>
                    <?=displayGenres()?>
                </select>
            </div><br><br>
            
            <table id="comics">
                <thead ><tr>
                    <th>Title: </th>
                    <th>Author: </th>
                    <th>Artist: </th>
                    <th>Cover: </th>
                    <th>Publisher: </th>
                    <th>Publish Year: </th>
                </tr></thead>
                <tbody>
                    
                </tbody>
            </table>
    
        </form>
      
        
        

            
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
                            '</td><td>'+data[i].autName+'</td><td>'+data[i].artName+' </td><td><img src='+data[i].cover+' height="120" width="100"></td><td>'
                            +data[i].publisher+' </td><td>'+data[i].releaseDate+'</td></tr>');
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
































