<?php
require_once ("DBconnector.php");
require_once ("sanpham.php");
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
    public function insert_donhang($id_kh,$th_tien,$ngaylap,$ht_thanhtoan,$trangthai){
        $sql="insert into donhang(idkhachhang,thanhtien,ngaylapdonhang,hinhthucthanhtoan,trangthai)values ('".$id_kh."','".$th_tien."','".$ngaylap."','".$ht_thanhtoan."','".$trangthai."')";
         $result=$this->conn->query($sql);
         return $result;
    }
    public function insert_sp_donhang($id_dh,$array_sp_donhang){
        $prep=$this->conn->prepare("insert into sanphamdonhang(iddonhang,idsanpham,soluong)values (?,?,?)");
        $prep->bind_param("iii",$id_donhang,$id_sp,$sl);
        $result=true;
        foreach ($array_sp_donhang as $key=>$value) {
            $id_donhang=$id_dh;
            $id_sp=$value->getIdsanpham();
            $sl=$value->getSoluongsanpham();
            $prep->execute();
//            if($results==false){
//                $result=false;
//                break;
//            }
        }
        return $result;

    }
    public function getLast_id_inserted(){
        $lastid=$this->conn->insert_id;
        return $lastid;
    }
    public function delete_sp_giohang_by_id_khachhang($id_kh){
        $sql="delete from sanphamgiohang where sanphamgiohang.idkhachhang='".$id_kh."'";
        $result=$this->conn->query($sql);
        return $result;
    }
    public function get_SP_sau_dathang($id_dh){
        $sql="select * from sanpham,sanphamdonhang where sanpham.idsanpham=sanphamdonhang.idsanpham and sanphamdonhang.iddonhang='".$id_dh."';";
        $result=$this->conn->query($sql);
        $array_sp_moi= array();
        While($row=$result->fetch_assoc()){
            $sp= new sanpham($row['idsanpham'],$row['tensanpham'],$row['loaisanpham'],$row['giasanpham'],$row['mausacsanpham'],$row['sizesanpham'],($row['soluongsanpham']-  $row['soluong']),$row['motasanpham'],$row['urlanhsanpham']);
            array_push($array_sp_moi,$sp);
        }
        return $array_sp_moi;

    }

}
?>