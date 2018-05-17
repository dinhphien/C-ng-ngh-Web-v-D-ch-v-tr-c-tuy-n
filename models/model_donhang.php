<?php

require_once ("DBconnector.php");
require_once ("sanpham.php");
require_once ("donhang.php");

class Model_Donhang {

    private $conn;

    /**
     * Model_donhang constructor.
     * @param $conn
     */
    public function __construct() {
        $dbconnect = new DBConnector();
        $this->conn = $dbconnect->connect();
    }
    public function duyet_don_hang($id){
        $sql="update donhang set trangthai='Đã duyệt' where iddonhang='".$id."'";
//        var_dump($sql);
        $result = $this->conn->query($sql);
        return $sql;
    }

    public function show_dh() {
        $sql = "SELECT iddonhang,khachhang.tenkhachhang,khachhang.sodienthoai,thanhtien,ngaylapdonhang,hinhthucthanhtoan,trangthai FROM donhang,khachhang WHERE donhang.idkhachhang=khachhang.idkhachhang";
        $result = $this->conn->query($sql);
        $array_sp_moi = array();
        While ($row = $result->fetch_assoc()) {
            // $sp = new sanpham($row['idsanpham'], $row['tensanpham'], $row['loaisanpham'], $row['giasanpham'], $row['mausacsanpham'], $row['sizesanpham'], ($row['soluongsanpham'] - $row['soluong']), $row['motasanpham'], $row['urlanhsanpham']);
            array_push($array_sp_moi, $row);
        }
        return $array_sp_moi;
    }

    public function show_donhang_by_ID($id) {
        $sql = "SELECT khachhang.tenkhachhang,sanpham.tensanpham,sanphamdonhang.giaspdh,sanphamdonhang.soluong,donhang.ngaylapdonhang,donhang.thanhtien,khachhang.sodienthoai,donhang.iddonhang 
            FROM donhang,khachhang,sanphamdonhang,sanpham
            WHERE donhang.idkhachhang=khachhang.idkhachhang AND
             donhang.iddonhang=sanphamdonhang.iddonhang AND
             sanphamdonhang.idsanpham=sanpham.idsanpham AND
             donhang.iddonhang='" . $id . "'";
        $result = $this->conn->query($sql);
        $array_sp_moi = array();
        While ($row = $result->fetch_assoc()) {
            // $sp = new sanpham($row['idsanpham'], $row['tensanpham'], $row['loaisanpham'], $row['giasanpham'], $row['mausacsanpham'], $row['sizesanpham'], ($row['soluongsanpham'] - $row['soluong']), $row['motasanpham'], $row['urlanhsanpham']);
            array_push($array_sp_moi, $row);
        }
        return $array_sp_moi;
    }

    public function insert_donhang($id_kh, $th_tien, $ngaylap, $ht_thanhtoan, $trangthai) {
        $sql = "insert into donhang(idkhachhang,thanhtien,ngaylapdonhang,hinhthucthanhtoan,trangthai)values ('" . $id_kh . "','" . $th_tien . "','" . $ngaylap . "','" . $ht_thanhtoan . "','" . $trangthai . "')";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function insert_sp_donhang($id_dh, $array_sp_donhang) {
        $prep = $this->conn->prepare("insert into sanphamdonhang(iddonhang,idsanpham,soluong,giaspdh)values (?,?,?,?)");
        $prep->bind_param("iiid", $id_donhang, $id_sp, $sl, $gia_sp);
        $result = true;
        foreach ($array_sp_donhang as $key => $value) {
            $id_donhang = $id_dh;
            $id_sp = $value->getIdsanpham();
            $sl = $value->getSoluongsanpham();
            $gia_sp = $value->getGiasanpham();
            $prep->execute();
//            if($results==false){
//                $result=false;
//                break;
//            }
        }
        return $result;
    }

    public function getLast_id_inserted() {
        $lastid = $this->conn->insert_id;
        return $lastid;
    }

    public function delete_sp_giohang_by_id_khachhang($id_kh) {
        $sql = "delete from sanphamgiohang where sanphamgiohang.idkhachhang='" . $id_kh . "'";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function get_SP_sau_dathang($id_dh) {
        $sql = "select * from sanpham,sanphamdonhang where sanpham.idsanpham=sanphamdonhang.idsanpham and sanphamdonhang.iddonhang='" . $id_dh . "';";
        $result = $this->conn->query($sql);
        $array_sp_moi = array();
        While ($row = $result->fetch_assoc()) {
            $sp = new sanpham($row['idsanpham'], $row['tensanpham'], $row['loaisanpham'], $row['giasanpham'], $row['mausacsanpham'], $row['sizesanpham'], ($row['soluongsanpham'] - $row['soluong']), $row['motasanpham'], $row['urlanhsanpham']);
            array_push($array_sp_moi, $sp);
        }
        return $array_sp_moi;
    }

}

?>