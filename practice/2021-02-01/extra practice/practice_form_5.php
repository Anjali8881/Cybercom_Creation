<?php

if(isset($_POST['email']) && isset($_POST['password']) ) {
   
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email ) && !empty($password)){
        echo 'Your email address is:- '.$email.'<br>';
        echo 'Your passworsd is:- '.$password;;
    }else{
        echo 'Empty';
    }
}else{
    echo 'Not set';
}

  

?>