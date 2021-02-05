<?php

require 'connection_database.php';

if(isset($_POST['search_name'])){
    $search_name = $_POST['search_name'];
    if(!empty($search_name)){
        $query = "SELECT `name` from `names` where `name` LIKE '%".$search_name."%'";
        $query_run = mysqli_query($conn,$query);

        if(mysqli_num_rows($query_run) >=1){
            echo 'Results found:<br>';
            while($query_row = mysqli_fetch_assoc($query_run)){
                echo $query_row['name'].'<br>';
            }
        }else{
            echo 'No results founds';
        }
    }
}

?>

<form action="like_practice.php" method="POST">
    Name: <input type="text" name="search_name"><br><br>
    <input type="submit" value="Search">
</form>