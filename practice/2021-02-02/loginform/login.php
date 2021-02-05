<?php

require 'connection.php';

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashPassword = md5($password);

    if(!empty($_POST['username']) && $_POST['password']){
        $query = "select id from user_login_details where user_name = '$username' and user_password = '$hashPassword'";
        $result = mysqli_query($conn, $query);
        
        if($result){
            $num_rows = mysqli_num_rows($result) ;

            if($num_rows == 0){
                echo 'Invalid username and password';
            }else if($num_rows == 1){
                while($query_result = mysqli_fetch_assoc($result)){
                    $user_id = $query_result['id'];
                }

                $_SESSION['user_id'] = $user_id;
                header('Location : index.php');
            }
        }
    }else{
        echo 'Please enter the details first';
    }
}

?>

<form action="<?php echo $current_file; ?>" method ='post'>
	Username <input type="text" name="username"><br><br>
	Password <input type="password" name="password"><br><br>
	<input type="submit" name="submit" value="login">

</form>