<?php

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['month']) && isset($_POST['day'])  && isset($_POST['year']) && isset($_POST['gender']) && isset($_POST['country']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password'])  && isset($_POST['agree'])){
   
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    if(!empty($firstName) && !empty($lastName)  && !empty($month) && !empty($day) && !empty($year) && !empty($gender) && !empty($country) && !empty('email') && !empty('phone') && !empty($password)  ){
        echo 'Your first Name is:- '.$firstName.'<br>';
        echo 'Your last Name is:- '.$lastName.'<br>';
        echo 'Your date of birth is:- '.$month.'/'.$day.'/'.$year.'<br>';
        echo 'Your gender is:- '.$gender.'<br>';
        echo 'Your country name is:- '.$country.'<br>';
        echo 'Your email address is:- '.$email.'<br>';
        echo 'Your phone number is:- '.$phone.'<br>';
        echo 'Your password is:- '.$password;
       
    }else{
        echo 'Empty';
    }
}else{
    echo 'Not set';
}

?>