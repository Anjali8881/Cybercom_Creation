<?php

if(isset($_POST['roledice'])){
    $random_number = rand(1,6);
    echo "You rolled a ".$random_number;
}

?>

<form action="randomnumber.php" method="POST">
    <input type="submit" name="roledice" value="Role a dice">
</form>