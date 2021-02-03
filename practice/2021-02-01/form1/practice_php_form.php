<table border="1" name="table">
    <tr>
        <th>Name</th>
        <th>password</th>
        <th>address</th>
        <th>game</th>
        <th>gender</th>
        <th>age</th>
        <th>file</th>
    </tr>

<?php

if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['game']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_FILES['file']['name'])){
   
    $name = $_POST['name'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $game = implode(',',$_POST['game']);
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $file = $_FILES['file']['name'];

   // print_r($file);

    if(!empty($name) && !empty($password) && !empty($address) && !empty($game) && !empty($gender) && !empty($age) && !empty($file) ){
        /*echo 'Your name is:- '.$name.'<br>';
        echo 'Your password is:- '.$password.'<br>';
		echo 'Your address is:- '.$address.'<br>';
		echo 'Your favourite games is:- ';
			for($i = 0; $i<$count; $i++) {
				echo $game[$i].', ';
            }
        echo '<br>Your gender is:- '.$gender.'<br>';
		echo 'Your age is:-  '.$age.'<br>';
        echo '<br>Uploaded file is:-  '.$file;*/
        
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
            $query = "INSERT into `form1`(`name`,`password`,`address`,`game`,`gender`,`age`,`file`) values ('$name', '$password', '$address', '$game', '$gender', '$age', '$file')";
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

$query = "SELECT `name`,`password`,`address`,`game`,`gender`,`age`,`file` from `form1`";
    if ($query_run = mysqli_query($conn, $query)) {
        if (mysqli_num_rows($query_run) == NULL) {
            echo '<script> alert ("No result found!")</script>';
        } else {
            while ($query_row = mysqli_fetch_assoc($query_run)) {
                $name = $query_row['name'];
                $password = $query_row['password'];
                $address = $query_row['address'];
                $game = $query_row['game'];
                $gender = $query_row['gender'];
                $age = $query_row['age'];
                $file = $query_row['file'];
                echo ("<tr>");
                echo ("<td>$name</td>");
                echo ("<td>$password</td>");
                echo ("<td>$address</td>");
                echo ("<td>$game</td>");
                echo ("<td>$gender</td>");
                echo ("<td>$age</td>");
                echo ("<td>$file</td>");
                echo ("</tr>");
            }
        }
    } else {
        echo mysqli_error('Error!');
    }



?>

</table>