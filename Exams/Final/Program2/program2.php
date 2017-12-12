<?php

   
        include '../../dbConnection.php';
        $conn = getDatabaseConnection();
        
       
        $sql = "SELECT * FROM `fe_login`";
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