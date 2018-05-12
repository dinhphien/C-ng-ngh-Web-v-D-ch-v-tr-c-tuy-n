<?php
require_once ("DBconnector.php");
require_once ("donhang.php");
class Model_Donhang{
    private $conn;

    /**
     * Model_donhang constructor.
     * @param $conn
     */
    public function __construct()
    {
        $dbconnect= new DBConnector();
        $this->conn = $dbconnect->connect();
    }

}
?>