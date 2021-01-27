<?php

/*$string = 'Hello How Are You';
$str_lower = strtolower($string);
$str_upper = strtoupper($string);

echo $str_lower."<br>";
echo $str_upper;*/

if(isset($_GET['username']) && !empty($_GET['username'])){
    $user_name = $_GET['username'];
    $user_name_lower = strtolower($user_name);

    if($user_name_lower == 'anjali'){
        echo 'You are best '.$user_name;
    }
}

?>

<form action="upperlower.php" method="GET">
       Name:<input ype="text" name="username"><br><br>
       <input type="submit" name="submit" value="Submit">
</form>