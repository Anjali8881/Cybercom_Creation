<?php

$hostName = 'localhost';
$userName = 'root1';
$password = 'root';
$dbName = 'names';

class ServerException extends Exception{
    public function showSpecific(){
        return 'Error throw on line '.$this->getLine().' in '.$this->getFile();
    }
}
class DatabaseException extends Exception{
    public function showSpecific(){
        return 'Error throw on line '.$this->getLine().' in '.$this->getFile();
    }
}

try{
    if(!@mysqli_connect($hostName,$userName,$password)){
        throw new ServerException();
    }elseif(!@mysqli_select_db($dbName)){
        throw new DatabaseException();
    }else{
        echo 'Connected';
    }
}catch(ServerException $ex){
    echo $ex->showSpecific();
}catch(DatabaseException $ex){
    echo $ex->showSpecific();;
}

?>