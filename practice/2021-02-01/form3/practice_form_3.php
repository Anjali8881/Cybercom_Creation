<table border="1" name="table">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Country</th>
        <th>Email</th>
        <th>Phone</th>
        <th>password</th>
    </tr>

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
    $date = $month.'/'.$day.'/'.$year;

    if(!empty($firstName) && !empty($lastName)  && !empty($month) && !empty($day) && !empty($year) && !empty($gender) && !empty($country) && !empty('email') && !empty('phone') && !empty($password)  ){
       /* echo 'Your first Name is:- '.$firstName.'<br>';
        echo 'Your last Name is:- '.$lastName.'<br>';
        echo 'Your date of birth is:- '.$month.'/'.$day.'/'.$year.'<br>';
        echo 'Your gender is:- '.$gender.'<br>';
        echo 'Your country name is:- '.$country.'<br>';
        echo 'Your email address is:- '.$email.'<br>';
        echo 'Your phone number is:- '.$phone.'<br>';
        echo 'Your password is:- '.$password;*/

        $conn = new mysqli('localhost','root','root','form_practice');
        $connection_error = 'Error in Connection';
        
        if(!$conn){
            die($connection_error);
        }else{
           /* $statement = $conn->prepare("Insert into form1(Name,Password,Address,Game,Gender,Age,File) values(?,?,?,?,?,?,?)");
            $statement->bind_param("sisssib",$name,$password,$address,$game,$gender,$age,$file);
            $statement->execute();
            echo "Data Insert Successfully";
            $statement->close();
            $conn->close();*/
            $query = "INSERT into `form3`(`fname`,`lname`,`dob`,`gender`,`country`,`email`,`phone`,`password`) values ('$firstName', '$lastName', '$date', '$gender', '$country', '$email', '$phone','$password')";
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

$query = "SELECT `fname`,`lname`,`dob`,`gender`,`country`,`email`,`phone`,`password` from `form3`";
    if ($query_run = mysqli_query($conn, $query)) {
        if (mysqli_num_rows($query_run) == NULL) {
            echo '<script> alert ("No result found!")</script>';
        } else {
            while ($query_row = mysqli_fetch_assoc($query_run)) {
                $firstName = $query_row['fname'];
                $lastName = $query_row['lname'];
                $dob = $query_row['dob'];
                $gender = $query_row['gender'];
                $country = $query_row['country'];
                $email = $query_row['email'];
                $phone = $query_row['phone'];
                $password = $query_row['password'];
    
                echo ("<tr>");
                echo ("<td>$firstName</td>");
                echo ("<td>$lastName</td>");
                echo ("<td> $dob</td>");
                echo ("<td>$gender</td>");
                echo ("<td>$country</td>");
                echo ("<td>$email</td>");
                echo ("<td>$phone</td>");
                echo ("<td>$password</td>");
                echo ("</tr>");
            }
        }
    } else {
        echo mysqli_error('Error!');
    }


?>


</table>