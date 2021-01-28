<?php

$find = array('anjali','vanshika','ronak');
$replace = array('a****i','v******a','r***k');
if(isset($_POST['user_input']) && !empty($_POST['user_input'])){
    $user_input = $_POST['user_input'];
    //$user_input_lc = strtolower($user_input);
    $user_new_input = str_ireplace($find,$replace,$user_input);

    echo $user_new_input;
}

?>

<hr>

<form action="wordcensoring.php" method="POST">
            <textarea name="user_input" rows="5" cols="20"></textarea><br><br>
            <input type="submit" value="submit">
</form>
