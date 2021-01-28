<?php
$offset = 0;

if(isset($POST['user_textarea']) && isset($POST['search_text']) && isset($_POST['replace_text'])){
    $text = $_POST['user_textarea'];
    $search = $_POST['search_text'];
    $replace = $_POST['replace_text'];

    $text_length = strlen($text);

    if(!empty($text) && !empty($search) && !empty($replace)){
        while($str_pos = strpos($text,$search,$offset)){
            $offset = $str_pos+$text_length;
            $text = substr_replace($text,$replace,$str_pos,$text_length);
        }
        echo $text;
    }else{
        echo "please fields all the fields first";
    }
}

?>

<form action="find_replace_application.php" method="POST">
        <textarea name="user_textarea" rows="5" cols="20"></textarea><br><br>
        <label>Search for:</label><br>
        <input type="text" name="search_text"/><br><br>
        <label>Replace with:</label><br>
        <input type="text" name="replace_text"/><br><br>
        <input type="submit" value="Find and Replace"/>
</form>