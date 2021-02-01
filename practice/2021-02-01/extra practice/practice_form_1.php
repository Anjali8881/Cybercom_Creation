<?php


if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['game']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_FILES['file']['name'])){
   
    $name = $_POST['name'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $game = $_POST['game'];
    $count = count($game);
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $file = $_FILES['file']['name'];

   // print_r($file);

    if(!empty($name) && !empty($password) && !empty($address) && !empty($game) && !empty($gender) && !empty($age) && !empty($file) ){
        echo 'Your name is:- '.$name.'<br>';
        echo 'Your password is:- '.$password.'<br>';
		echo 'Your address is:- '.$address.'<br>';
		echo 'Your favourite games is:- ';
			for($i = 0; $i<$count; $i++) {
				echo $game[$i].', ';
            }
        echo '<br>Your gender is:- '.$gender.'<br>';
		echo 'Your age is:-  '.$age.'<br>';
		echo '<br>Uploaded file is:-  '.$file;
    }else{
        echo 'Empty';
    }
}else{
    echo 'Not set';
}

    


?>

