<?php
require_once("DBconnector.php");
require_once ("khachhang.php");
class Model_Khachhang{
    private $conn;

    public function __construct()
    {
        $dbconnect= new DBConnector();
        $this->conn= $dbconnect->connect();
    }
    public function insertKhachHang($idtaikhoan,$name,$email,$phone,$adrs){
        $sql="insert into khachhang(idtaikhoan,tenkhachhang,email,sodienthoai,quequan) values ('".$idtaikhoan."','".$name."','".$email."','".$phone."','".$adrs."')";
        $result=$this->conn->query($sql);
        return($result);
    }

}
?>