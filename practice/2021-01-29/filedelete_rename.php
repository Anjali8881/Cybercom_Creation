<?php
/*

delete code

$file_name = 'filetodelete.txt';

if(@unlink($file_name)){
    echo 'File <b>'.$file_name.'</b> has been deleted';
}else{
    echo 'File cannot be deleted';
}*/

//rename code

$file_name = 'filerename.txt';
$random_file_number = rand(100000,99999);

if(@rename($file_name,$random_file_number.'.txt')){
    echo 'File <b>'.$file_name.'</b> has been renamed to <b>'.$random_file_number.'.txt </b>';
}else{
    echo 'Error in renaming the file';
}
?>