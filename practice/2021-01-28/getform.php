<?php

if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])){
    $day = $_GET['day'];
    $date = $_GET['date'];
    $year = $_GET['year'];

    if(!empty($day) && !empty($date) && !empty($year)){
        echo 'Today is '.$day.' '.$date.' '.$year;
    }else{
        echo 'Please fill all the fields';
    }
}

?>
<form action="getform.php" method='GET'>
     <label>Day:</label><br>
     <input type="text" name="day"><br><br>
     <label>Date:</label><br>
     <input type="text" name="date"><br><br>
     <label>Year:</label><br>
     <input type="text" name="year"><br><br>
     <input type="submit" name="submit" value="Submit">
</form>
