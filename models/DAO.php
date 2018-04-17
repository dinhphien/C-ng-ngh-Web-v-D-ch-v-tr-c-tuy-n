<?php
require_once 'DBconnector.php';

class DAO {
    private $conn;

    public function _construct(){
        $db_connector=new DBconnector();
        $this->conn=$db_connector->connect();
    }



}
?>