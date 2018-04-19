<?php
class DBConnector {
    public function connect(){
        $host='localhost';
        $user='root';
        $password='123456';
        $db='csdl_congngheweb';
        $connection=mysqli_connect($host,$user,$password,$db);
        mysqli_set_charset($connection,"utf8");
        return $connection;
    }
}

?>