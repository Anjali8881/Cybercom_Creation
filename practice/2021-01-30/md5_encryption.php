<?php

if(isset($_POST['password'])){
    
    if(!empty($_POST['password'])){
        $password = md5($_POST['password']);
        $file_name = 'pass_hash.txt';
        $file_handle = fopen($file_name,'r');
        $password_hash = fread($file_handle,filesize($file_name));
        fclose($file_handle);

        if($password == $password_hash){
            echo 'Password Correct';
        }else{
            echo 'Incorrect Password';
        }
    }else{
        echo 'Please insert the password first';
    }
}

?>

<form action="md5_encryption.php" method="POST">
        Password:<br><input type="text" name="password"><br><br>
        <input type="submit" value="Submit">
</form>