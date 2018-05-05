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
        $array_sp= array();
        while($row=$result->fetch_assoc()){
            $sp= new sanpham($row['idsanpham'],$row['tensanpham'],$row['loaisanpham'],$row['giasanpham'],$row['mausacsanpham'],$row['sizesanpham'],
                $row['soluongsanpham'],$row['motasanpham'],$row['urlanhsanpham']);
            array_push($array_sp,$sp);
        }
        return $array_sp;
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

}
?>