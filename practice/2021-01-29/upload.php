<?php

if(isset($_FILES['file'])){
    $file_name = $_FILES['file']['name'];
    $temp_location = $_FILES['file']['tmp_name'];
    $extension = strtolower(substr($file_name,strpos($file_name,'.')+1));
    $type = $_FILES['file']['type'];
    $size = $_FILES['file']['size'];
    $max_size = 100000;

    if(!empty($file_name)){
        if(($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png') && $type=='image/jpeg' && $size <= $max_size){
            $location = 'uploads/';

            if(move_uploaded_file($temp_location,$location.$file_name)){
                echo 'uploaded';
            }else{
                echo 'File not uploaded';
            }
        }else{
            echo 'File must be jpg/jpeg or less tha 1mb';
        }
    }else{
        echo 'Please choose a file';
    }

}

?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type='file' name='file'><br><br>
    <input type='submit' value='Submit'>
</form>