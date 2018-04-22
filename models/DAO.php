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
    public function insertTaiKhoan($usr,$psd){
        $sql = "insert into taikhoan(tentaikhoan,matkhau,vaitro) values ('".$usr."','".$psd."','khachhang')";
        $results=$this->conn->query($sql);
        return $results;
    }
    public function getLastid(){
        $lastid=$this->conn->insert_id;
        return $lastid;
    }
    public function insertKhachHang($idtaikhoan,$name,$email,$phone,$adrs){
        $sql="insert into khachhang(idtaikhoan,tenkhachhang,email,sodienthoai,quequan) values ('".$idtaikhoan."','".$name."','".$email."','".$phone."','".$adrs."')";
        $result=$this->conn->query($sql);
        return($result);
    }

}

?>