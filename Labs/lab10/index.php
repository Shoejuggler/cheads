<?php

function displayImages(){
    if(isset($_POST['submitForm'])){//checks if form has been submitted
    //print_r($_FILES);
    
    //echo $_FILES['myFile']['name'];
    if(filesize($_FILES['myFile']['tmp_name'])<1000000){
        move_uploaded_file($_FILES['myFile']['tmp_name'], "gallery/". $_FILES['myFile']['name']);
        
        //echo "<img src='gallery/" . $_FILES['myFile']['name'] . "'>";
        
        $files=scandir("gallery/", 1);
         
        print_r($files);  
        
        for($i=0; $i<count($files)-2; $i++){
            echo "<img src='gallery/" . $files[$i] . "'id='image' width='35'><br>";
        }
    }
    else{
        
        echo "That's much too big. Please upload a file under 1MB";
    }
    }
    
    
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Lab 10: File Upload </title>
    </head>
    <body>


    <h1> Photo Gallery </h1>
    
    <form method="POST" enctype="multipart/form-data">
        
        Upload file: 
        
        <input type="file" name="myFile"/>
        
        <input type="submit" name="submitForm" value="Upload!" />
        
    </form>

    <br />

    <?=displayImages()?>


    </body>
</html>