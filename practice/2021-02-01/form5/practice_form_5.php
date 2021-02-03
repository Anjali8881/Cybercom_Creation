<table border="1" name="table">
    <tr>
        <th>Email</th>
        <th>Password</th>
    </tr>

<?php

if(isset($_POST['email']) && isset($_POST['password']) ) {
   
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email ) && !empty($password)){
       /* echo 'Your email address is:- '.$email.'<br>';
        echo 'Your passworsd is:- '.$password;;*/
        $conn = new mysqli('localhost','root','root','form_practice');
        $connection_error = 'Error in Connection';
        
        if(!$conn){
            die($connection_error);
        }else{
          
            $query = "INSERT into `form5`(`email`,`password`) values ('$email', '$password')";
            $result = mysqli_query($conn, $query);

            if(!$result){
                echo '<script> alert ("Problem white inserting data!") </script>';
            }else{
               echo '<script> alert ("Data inserted successfully!") </script>';
            }
        }
    }else{
        echo 'Empty';
    }
}else{
    echo 'Not set';
}

$query = "SELECT `email`,`password` from `form5`";
    if ($query_run = mysqli_query($conn, $query)) {
        if (mysqli_num_rows($query_run) == NULL) {
            echo '<script> alert ("No result found!")</script>';
        } else {
            while ($query_row = mysqli_fetch_assoc($query_run)) {
                $email = $query_row['email'];
                $password = $query_row['password'];
        
                echo ("<tr>");
                echo ("<td>$email</td>");
                echo ("<td>$password</td>");
                echo ("</tr>");
            }
        }
    } else {
        echo mysqli_error('Error!');
    }


?>

</table>