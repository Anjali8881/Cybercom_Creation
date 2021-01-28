<?php

$match_pass = "pass@123";

if(isset($_POST['password']))
{
    $password = $_POST['password'];
    if(!empty($password)){
        if($match_pass == $password){
            echo 'Correct Password';
        }else{
            echo 'Incorrect password';
        }
    }
}

?>

<form action="postform.php" method="POST">
    <label>Password:</label><br>
    <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="submit">
</form>
