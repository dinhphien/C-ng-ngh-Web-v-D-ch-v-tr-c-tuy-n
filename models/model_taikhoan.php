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


}

?>