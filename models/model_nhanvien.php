<?php
require_once("DBconnector.php");
require_once ("nhanvien.php");
class Model_Nhanvien{
    private $conn;

    /**
     * Model_Nhanvien constructor.
     * @param $dao
     */
    public function __construct($dao)
    {
       $dbconnect=new DBConnector();
       $this->conn= $dbconnect->connect();
    }


}
?>