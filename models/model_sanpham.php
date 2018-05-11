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
    public function getSP_type($type){
        $sql="select * from sanpham where sanpham.loaisanpham='".$type."';";
        $result=$this->conn->query($sql);
        $array_sp= array();
        while($row=$result->fetch_assoc()){
            $sp= new sanpham($row['idsanpham'],$row['tensanpham'],$row['loaisanpham'],$row['giasanpham'],$row['mausacsanpham'],$row['sizesanpham'],
                $row['soluongsanpham'],$row['motasanpham'],$row['urlanhsanpham']);
            array_push($array_sp,$sp);
        }
        return $array_sp;
    }
    public function getSP_name($type,$name){
        $sql="select * from sanpham where sanpham.loaisanpham='".$type."'and sanpham.tensanpham='".$name."';";
        $result=$this->conn->query($sql);
        $array_sp= array();
        while($row=$result->fetch_assoc()){
            $sp= new sanpham($row['idsanpham'],$row['tensanpham'],$row['loaisanpham'],$row['giasanpham'],$row['mausacsanpham'],$row['sizesanpham'],
                $row['soluongsanpham'],$row['motasanpham'],$row['urlanhsanpham']);
            array_push($array_sp,$sp);
        }
        return $array_sp;
    }
    public function getSP_id($id){
        $sql="select * from sanpham where sanpham.idsanpham='".$id."';";
        $result=$this->conn->query($sql);
        while($row=$result->fetch_assoc()){
            $sp= new sanpham($row['idsanpham'],$row['tensanpham'],$row['loaisanpham'],$row['giasanpham'],$row['mausacsanpham'],$row['sizesanpham'],
                $row['soluongsanpham'],$row['motasanpham'],$row['urlanhsanpham']);
        }
        return $sp;
    }
    public function getSP_type_limit($type,$start,$limit){
        $sql="select * from sanpham where sanpham.loaisanpham='".$type."' limit ".$start.",".$limit.";";
        $result=$this->conn->query($sql);
        $array_sp= array();
        while($row=$result->fetch_assoc()){
            $sp= new sanpham($row['idsanpham'],$row['tensanpham'],$row['loaisanpham'],$row['giasanpham'],$row['mausacsanpham'],$row['sizesanpham'],
                $row['soluongsanpham'],$row['motasanpham'],$row['urlanhsanpham']);
            array_push($array_sp,$sp);
        }
        return $array_sp;
    }
    public function themSP_giohang($id_tk,$id_sp){
        $sql1="select * from sanphamgiohang where sanphamgiohang.idkhachhang='".$id_tk."'and sanphamgiohang.idsanpham='".$id_sp."';";
        $result1=$this->conn->query($sql1);
        $result2="false";
        if($result1->num_rows==0){
            $sql2="insert into sanphamgiohang(idkhachhang,idsanpham,soluongsanphamgiohang) values ('".$id_tk."','".$id_sp."','1')";
            $result2=$this->conn->query($sql2);
        }
        else{
            $sql3="update sanphamgiohang set sanphamgiohang.soluongsanphamgiohang=sanphamgiohang.soluongsanphamgiohang+1 where sanphamgiohang.idkhachhang='".$id_tk."'and sanphamgiohang.idsanpham='".$id_sp."';";
            $result2=$this->conn->query($sql3);
        }
        return $result2;

    }
    public function getSP_giohang_by_idkhachhang($idkhachhang){
        $sql="select * from sanpham,sanphamgiohang where sanpham.idsanpham=sanphamgiohang.idsanpham and sanphamgiohang.idkhachhang='".$idkhachhang."';";
        $result=$this->conn->query($sql);
        $array_sp_giohang= array();
        While($row=$result->fetch_assoc()){
             $sp= new sanpham($row['idsanpham'],$row['tensanpham'],$row['loaisanpham'],$row['giasanpham'],$row['mausacsanpham'],$row['sizesanpham'],
                $row['soluongsanphamgiohang'],$row['motasanpham'],$row['urlanhsanpham']);
            array_push($array_sp_giohang,$sp);
        }
        return $array_sp_giohang;

    }

}
?>