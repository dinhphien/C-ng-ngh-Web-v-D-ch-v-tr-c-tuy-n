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
    public function xoasp($id){
        $sql="delete from sanpham where idsanpham='".$id."'";
        $this->conn->query($sql);
    }

    public function insert($ten, $loai, $gia, $size, $soluong, $mausac, $url, $mota) {
        $sql = "insert into sanpham(tensanpham,loaisanpham,giasanpham,mausacsanpham,sizesanpham,soluongsanpham,motasanpham,urlanhsanpham)values ('".$ten."','".$loai."','".$gia."','".$mausac."','".$size."','".$soluong."','".$mota."','".$url."')";
        $result = $this->conn->query($sql);
       // var_dump($sql);
    }
      public function update($id, $ten, $loai, $gia, $size, $soluong, $mausac, $url, $mota) {
        $sql = "update sanpham set sanpham.idsanpham='" . $id . "', sanpham.tensanpham='" . $ten . "', sanpham.loaisanpham='" . $loai . "', sanpham.giasanpham='" . $gia . "', sanpham.mausacsanpham='" . $mausac . "', sanpham.sizesanpham='" . $size . "', sanpham.soluongsanpham='" . $soluong . "', sanpham.motasanpham='" . $mota . "', sanpham.urlanhsanpham='" . $url . "' where sanpham.idsanpham='" . $id . "';";
        $result = $this->conn->query($sql);
        return $sql;
    }

    public function getSP_all() {
        $sql = "select * from sanpham";
        $result = $this->conn->query($sql);
        $array_sp = array();
        while ($row = $result->fetch_assoc()) {
            $sp = new sanpham($row['idsanpham'], $row['tensanpham'], $row['loaisanpham'], $row['giasanpham'], $row['mausacsanpham'], $row['sizesanpham'], $row['soluongsanpham'], $row['motasanpham'], $row['urlanhsanpham']);
            array_push($array_sp, $sp);
        }
        return $array_sp;
    }

    public function filter($id, $name, $category) {
        $sql = "select * from sanpham where idsanpham like '%" . $id . "%' and tensanpham like '%" . $name . "%' and loaisanpham='" . $category . "'";
        $result = $this->conn->query($sql);
        $array_sp = array();
        while ($row = $result->fetch_assoc()) {
//            $sp= new sanpham($row['idsanpham'],$row['tensanpham'],$row['loaisanpham'],$row['giasanpham'],$row['mausacsanpham'],$row['sizesanpham'],
//                $row['soluongsanpham'],$row['motasanpham'],$row['urlanhsanpham']);
            array_push($array_sp, $row);
        }
        return $array_sp;
    }

    public function getSP_By_ID($id) {
        $sql = "select * from sanpham where sanpham.idsanpham='" . $id . "';";
        $result = $this->conn->query($sql);
//        while($row=$result->fetch_assoc()){
//            $sp= new sanpham($row['idsanpham'],$row['tensanpham'],$row['loaisanpham'],$row['giasanpham'],$row['mausacsanpham'],$row['sizesanpham'],
//                $row['soluongsanpham'],$row['motasanpham'],$row['urlanhsanpham']);
//        }
        $row = $result->fetch_assoc();
        return $row;
    }

 
    public function up_anh($tmp_name, $name) {
        $target_dir1 = "F:\\workspace\\cnw\\views\\admin\\img\\";
        $target_dir2 = "F:\\workspace\\cnw\\views\\khachhang\\img\\";
        $target_file1 = $target_dir1 . $name;
        move_uploaded_file($tmp_name, $target_file1);
        $target_file2 = $target_dir2 . $name;
        copy($target_file1, $target_file2);
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
    public function remove_SP_giohang_by_id($id_tk,$id_sp){
        $sql="delete from sanphamgiohang where sanphamgiohang.idkhachhang='".$id_tk."'and sanphamgiohang.idsanpham='".$id_sp."';";
        $result=$this->conn->query($sql);
        return $result;
    }
    public function update_SP_giohang_by_id($id_tk,$id_sp,$sl){
        $sql="update sanphamgiohang set sanphamgiohang.soluongsanphamgiohang='".$sl."'where sanphamgiohang.idkhachhang='".$id_tk."'and sanphamgiohang.idsanpham='".$id_sp."';";
        $result=$this->conn->query($sql);
        return $result;
    }
    public function update_SP_sau_dathang($array_sp_moi){
        $prep=$this->conn->prepare("update sanpham set sanpham.soluongsanpham=? where sanpham.idsanpham=?");
        $prep->bind_param("ii",$sl_sp,$id_sp);
        $result=true;
        foreach ($array_sp_moi as $key=>$value){
            $sl_sp=$value->getSoluongsanpham();
            $id_sp=$value->getIdsanpham();
            $prep->execute();
        }
        return $result;

    }
    public function check_SP_giohang($idkhachhang){
        $sql="select * from sanpham,sanphamgiohang where sanpham.idsanpham=sanphamgiohang.idsanpham and sanphamgiohang.idkhachhang='".$idkhachhang."';";
        $result=$this->conn->query($sql);
        $array_check=array();
        $check="true";
        $ten_sp=" ";
        $sl=-1;
        while ($row=$result->fetch_assoc()){
            if($row['soluongsanpham']<$row['soluongsanphamgiohang']){
                $check="false";
               $ten_sp=$row["tensanpham"];
               $sl=$row["soluongsanphamgiohang"];
                break;
            }
        }
        $array_check['messeage']=$check;
        $array_check['ten_sp']=$ten_sp;
        $array_check["sl"]=$sl;
        return $array_check;
    }
    public function getSP_type_mausac($type,$mausac){
        $sql="select * from sanpham where sanpham.loaisanpham='".$type."'and sanpham.mausacsanpham='".$mausac."';";
        $result=$this->conn->query($sql);
        $array_sp= array();
        while($row=$result->fetch_assoc()){
//            $sp= new sanpham($row['idsanpham'],$row['tensanpham'],$row['loaisanpham'],$row['giasanpham'],$row['mausacsanpham'],$row['sizesanpham'],
//                $row['soluongsanpham'],$row['motasanpham'],$row['urlanhsanpham']);
            array_push($array_sp,$row);
        }
        return $array_sp;
    }
    public function getSP_type_size($type,$size){
        $sql="select * from sanpham where sanpham.loaisanpham='".$type."'and sanpham.sizesanpham='".$size."';";
        $result=$this->conn->query($sql);
        $array_sp= array();
        while($row=$result->fetch_assoc()){
//            $sp= new sanpham($row['idsanpham'],$row['tensanpham'],$row['loaisanpham'],$row['giasanpham'],$row['mausacsanpham'],$row['sizesanpham'],
//                $row['soluongsanpham'],$row['motasanpham'],$row['urlanhsanpham']);
            array_push($array_sp,$row);
        }
        return $array_sp;

    }
    public function getSP_type_gia($type,$gia){
        $sql="select * from sanpham where sanpham.loaisanpham='".$type."'and (sanpham.giasanpham between".$gia.");";
        $result=$this->conn->query($sql);
        $array_sp= array();
        while($row=$result->fetch_assoc()){
//            $sp= new sanpham($row['idsanpham'],$row['tensanpham'],$row['loaisanpham'],$row['giasanpham'],$row['mausacsanpham'],$row['sizesanpham'],
//                $row['soluongsanpham'],$row['motasanpham'],$row['urlanhsanpham']);
            array_push($array_sp,$row);
        }
        return $array_sp;

    }
    public function getSP_type_name_mausac($type,$name,$mausac){
        $sql="select * from sanpham where sanpham.loaisanpham='".$type."'and sanpham.tensanpham='".$name."'and sanpham.mausacsanpham='".$mausac."';";
        $result=$this->conn->query($sql);
        $array_sp= array();
        while($row=$result->fetch_assoc()){
//            $sp= new sanpham($row['idsanpham'],$row['tensanpham'],$row['loaisanpham'],$row['giasanpham'],$row['mausacsanpham'],$row['sizesanpham'],
//                $row['soluongsanpham'],$row['motasanpham'],$row['urlanhsanpham']);
            array_push($array_sp,$row);
        }
        return $array_sp;

    }
    public function getSP_type_name_size($type,$name,$size){
        $sql="select * from sanpham where sanpham.loaisanpham='".$type."'and sanpham.tensanpham='".$name."'and sanpham.sizesanpham='".$size."';";
        $result=$this->conn->query($sql);
        $array_sp= array();
        while($row=$result->fetch_assoc()){
//            $sp= new sanpham($row['idsanpham'],$row['tensanpham'],$row['loaisanpham'],$row['giasanpham'],$row['mausacsanpham'],$row['sizesanpham'],
//                $row['soluongsanpham'],$row['motasanpham'],$row['urlanhsanpham']);
            array_push($array_sp,$row);
        }
        return $array_sp;

    }
    public function getSP_type_name_gia($type,$name,$gia){
        $sql="select * from sanpham where sanpham.loaisanpham='".$type."'and sanpham.tensanpham='".$name."'and (sanpham.giasanpham between".$gia.");";
        $result=$this->conn->query($sql);
        $array_sp= array();
        while($row=$result->fetch_assoc()){
//            $sp= new sanpham($row['idsanpham'],$row['tensanpham'],$row['loaisanpham'],$row['giasanpham'],$row['mausacsanpham'],$row['sizesanpham'],
//                $row['soluongsanpham'],$row['motasanpham'],$row['urlanhsanpham']);
            array_push($array_sp,$row);
        }
        return $array_sp;

    }

}
?>