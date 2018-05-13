<?php
require_once("DBconnector.php");
require_once ("taikhoan.php");
class Model_Taikhoan{
    private $conn;

    /**
     * Model_Taikhoan constructor.
     * @param $dao
     */
    public function __construct()
    {
        $dbconnect= new DBConnector();
        $this->conn= $dbconnect->connect();
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
        $sql = "insert into taikhoan(tentaikhoan,matkhau,vaitro) values ('".$usr."','".$psd."','user')";
        $results=$this->conn->query($sql);
        return $results;
    }
    public function getLast_id_inserted(){
        $lastid=$this->conn->insert_id;
        return $lastid;
    }
    public function insertKhachhang($tenkh,$email,$sdt,$quequan){

        $sql = "insert into khachhang(tenkhachhang,email,sodienthoai,quequan) values ('".$tenkh."','".$email."','".$sdt."','".$quequan."')";
         $result=$this->conn->query($sql);
         return $result;
    }
    public function update_matkhau_TK($id_tk,$mk_moi){
        $sql="update taikhoan set taikhoan.matkhau='".$mk_moi."'where taikhoan.idtaikhoan='".$id_tk."';";
        $result=$this->conn->query($sql);
        return $result;
    }
    public function update_thongtin_kh($id_tk,$ten_moi,$sdt_moi,$add_moi,$email_moi){
        $sql="update khachhang set khachhang.tenkhachhang='".$ten_moi."',khachhang.email='".$email_moi."',khachhang.sodienthoai='".$sdt_moi."',khachhang.quequan='".$add_moi."'where khachhang.idtaikhoan='".$id_tk."';";
        $result=$this->conn->query($sql);
        return $result;
    }



}

?>