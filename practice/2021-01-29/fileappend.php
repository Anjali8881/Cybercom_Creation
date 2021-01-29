<?php

if(isset($_POST['name'])){
    $name = $_POST['name'];
    if(!empty($name)){
        $file_handle = fopen('names1.txt','a');
        fwrite($file_handle,$name."\n");
        fclose($file_handle);

        echo "Current name in file is:- ";

        $count = 1;
        $readingfilename = file('names1.txt');
        $read_count = count($readingfilename);

        foreach($readingfilename as $fname){
            echo trim($fname);

            if($count < $read_count){
                echo ' ,';
            }
            $count++;
            
        }
    }else{
        echo 'please type a name';
    }
}

?>
<form action="fileappend.php" method='POST'>
    Name:<br>
    <input type="text" name="name"><br><br>
    <input type="submit" value="Submit">
</form>