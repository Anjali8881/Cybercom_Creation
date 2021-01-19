<!DOCTYPE html>
<html lang="en">
<head>
    <title>Information Form Form</title>
</head>
<body>
    <h1><center>Thank You<center></h1>
    <p><center>Here is the information you have submitted:</center></p>
    
    <table border="2px" width="50" align="center">
        <tr>
            <th>Name</th>
            <th>Date Of Birth</th>
            <th>Email</th>
            <th>Number</th>
            <th>Gender</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip code</th>
        </tr>

        <tr>
            <td><?php echo $_POST["firstname"]?>&nbsp;<?php $_POST["lastname"]?></td>
            <td><?php echo $_POST["month"]?>&nbsp;<?php echo $_POST["day"]?>&nbsp;<?php echo $_POST["year"]?></td>
            <td><?php echo $_POST["email"]?></td>
            <td><?php echo $_POST["number"]?></td>
            <td><?php echo $_POST["gender"]?></td>
            <td><?php echo $_POST["address"]?></td>
            <td><?php echo $_POST["city"]?></td>
            <td><?php echo $_POST["state"]?></td>
            <td><?php echo $_POST["code"]?></td>
        </tr>
    </table>
</body>
</html>