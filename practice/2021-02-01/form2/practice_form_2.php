<table border="1" name="table">
    <tr>
        <th>Name</th>
        <th>password</th>
        <th>gender</th>
        <th>address</th>
        <th>dob</th>
        <th>games</th>
        <th>marrital status</th>
    </tr>

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
    //$count = count($game);
    $marritalStatus = $_POST['marrital_status'];
    $date = $month.'/'.$day.'/'.$year;

    if(!empty($name) && !empty($password) && !empty($gender) && !empty($address) && !empty($month) && !empty($day) && !empty($year) &&!empty($game)  && !empty($marritalStatus)){
        /*
        echo 'Your name is:- '.$name.'<br>';
        echo 'Your password is:- '.$password.'<br>';
        echo 'Your gender is:- '.$gender.'<br>';
        echo 'Your address is:- '.$address.'<br>';
        echo 'Your date of birth is:- '.$month.'/'.$day.'/'.$year.'<br>';
		echo 'Your favourite games is:- ';
			for($i = 0; $i<$count; $i++) {
				echo $game[$i].', ';
            }
        
        echo '<br>Your marrital status is:-  '.$marritalStatus;*/
        
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
            $query = "INSERT into `form2`(`fname`,`password`,`gender`,`address`,`dob`,`games`,`marital status`) values ('$name', '$password', '$gender', '$address', '$date', '$game', '$marritalStatus')";
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

$query = "SELECT `name`,`password`,`gender`,`address`,`dob`,`games`,`marrital status` from `form2`";
    if ($query_run = mysqli_query($conn, $query)) {
        if (mysqli_num_rows($query_run) == NULL) {
            echo '<script> alert ("No result found!")</script>';
        } else {
            while ($query_row = mysqli_fetch_assoc($query_run)) {
                $name = $query_row['name'];
                $password = $query_row['password'];
                $gender = $query_row['gender'];
                $address = $query_row['address'];
                $dob = $query_row['dob'];
                $game = $query_row['games'];
                $marrital_status = $query_row['marrital status'];
                echo ("<tr>");
                echo ("<td>$name</td>");
                echo ("<td>$password</td>");
                echo ("<td> $gender</td>");
                echo ("<td> $address</td>");
                echo ("<td>$dob</td>");
                echo ("<td>$game</td>");
                echo ("<td>$marrital_status</td>");
                echo ("</tr>");
            }
        }
    } else {
        echo mysqli_error('Error!');
    }


?>

</table>
