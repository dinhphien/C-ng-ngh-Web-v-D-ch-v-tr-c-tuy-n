<?php

require_once ('DBconnector.php');
require_once ('taikhoan.php');
require_once ('sanpham.php');
require_once ('nhanvien.php');
require_once ('khachhang.php');
require_once ('giohang.php');

class DAO {
    private $conn;

    /**
     * DAO constructor.
     * @param $conn
     */
    public function __construct()
    {
        $dbconnector= new DBConnector();
        $this->conn = $dbconnector->connect();
    }

    public function getTaiKhoan($usr,$psd){
        $sql="select * from taikhoan where taikhoan.tentaikhoan='".$usr."'and taikhoan.matkhau='".$psd."';";
        $result=$this->conn->query($sql);
        if($row=$result->fetch_assoc()){
            $tk=new taikhoan($row['idtaikhoan'],$row['tentaikhoan'],$row['matkhau'],$row['vaitro']);
            return $tk;
        }
        else{
            return null;
        }
    }

}

?>