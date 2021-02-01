<?php


if(isset($_POST['name']) && isset($_POST['password'])  && isset($_POST['gender']) && isset($_POST['address']) && isset($_POST['month']) && isset($_POST['day']) && isset($_POST['year']) && isset($_POST['game']) && isset($_POST['marrital_status']) && isset($_POST['agree'])){
   
    $name = $_POST['name'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    $game = $_POST['game'];
    $count = count($game);
    $marritalStatus = $_POST['marrital_status'];

    if(!empty($name) && !empty($password) && !empty($gender) && !empty($address) && !empty($month) && !empty($day) && !empty($year) &&!empty($game)  && !empty($marritalStatus)){
        echo 'Your name is:- '.$name.'<br>';
        echo 'Your password is:- '.$password.'<br>';
        echo 'Your gender is:- '.$gender.'<br>';
        echo 'Your address is:- '.$address.'<br>';
        echo 'Your date of birth is:- '.$month.'/'.$day.'/'.$year.'<br>';
		echo 'Your favourite games is:- ';
			for($i = 0; $i<$count; $i++) {
				echo $game[$i].', ';
            }
        
		echo '<br>Your marrital status is:-  '.$marritalStatus;
    }else{
        echo 'Empty';
    }
}else{
    echo 'Not set';
}

    


?>

