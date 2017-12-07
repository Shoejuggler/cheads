<?php
require_once( 'dbConnection.php');
$dbConn = getDatabaseConnection();

        $sql = "SELECT comicID, comicName, publisher, releaseDate, cover, authorID, artName, autName
                FROM f_comics
                NATURAL JOIN f_author
                NATURAL JOIN f_genre
                WHERE 1";
                
        $namedParameters = array();
        
        // if(!empty($_GET['bookName'])){ //user typed something for quote content 
        //     $sql = $sql . " AND bookName LIKE :book"; // using named parameters to avoid SQL injection
        //     $namedParameters[":bookName"] = "%" . $_GET['bookName'] . "%";
        // }
        
        if(!empty($_GET['genreID'])){
        $sql = $sql . " AND genreID = :genre ";
        $namedParameters[':genre'] = $_GET['genreID'];
        }
        
        $stmt = $dbConn -> prepare($sql);
        $stmt -> execute($namedParameters); 
        $records = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        
        echo json_encode($records);

?>