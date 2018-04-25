<?php
require_once("DBconnector.php");
require_once ("sanpham.php");
class Model_Sanpham{
    private $conn;

    /**
     * Model_Sanpham constructor.
     * @param $dao
     */
    public function __construct()
    {
        $dbconnect= new DBConnector();
        $this->conn = $dbconnect->connect();
    }

}
?>