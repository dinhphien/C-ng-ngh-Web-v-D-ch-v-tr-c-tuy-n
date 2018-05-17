<?php
require_once("DBconnector.php");
require_once ("tintuc.php");
class Model_Tintuc{
    private $conn;

    /**
     * Model_Tintuc constructor.
     * @param $dao
     */
    public function __construct(){
        $dbconnect= new DBConnector();
        $this->conn = $dbconnect->connect();
    }

    public function getTT_id($id){
        $sql="select * from tintuc where tintuc.idtintuc='".$id."';";
        $result=$this->conn->query($sql);
        while($row=$result->fetch_assoc()){
            $tt= new tintuc($row['idtintuc'],$row['tentintuc'],$row['noidungtintuc'],$row['urlanhtintuc'],$row['ngayviet']);
        }
        return $tt;
    }

    public function getTT_ten($ten){
        $sql="select * from tintuc where tintuc.tentintuc='".$ten."';";
        $result=$this->conn->query($sql);
        while($row=$result->fetch_assoc()){
            $tt= new tintuc($row['idtintuc'],$row['tentintuc'],$row['noidungtintuc'],$row['urlanhtintuc'],$row['ngayviet']);
        }
        return $tt;
    }

    public function getTT(){
        $sql="select * from tintuc ";
        $result=$this->conn->query($sql);
        $array_tt= array();
        while($row=$result->fetch_assoc()){
            $tt= new tintuc($row['idtintuc'],$row['tentintuc'],$row['noidungtintuc'],$row['urlanhtintuc'],$row['ngayviet']);
            array_push($array_tt,$tt);
        }
        return $array_tt;
    }

    public function delTT($id){
        $sql="delete from tintuc where tintuc.idtintuc='".$id."';";
        $result=$this->conn->query($sql);
        return $result;
    }

    public function insertTT($id,$tentt,$noidung,$urlanhtt,$ngayviet){
        $sql="insert into tintuc (idtintuc, tentintuc, noidungtintuc, urlanhtintuc, ngayviet) values ('".$id."','".$tentt."','".$noidung."','".$urlanhtt."','".$ngayviet."')";
        $result=$this->conn->query($sql);
        return $result;
    }

    public function updateTT($id,$tentt,$noidung,$url,$ngayviet){
        $sql="update tintuc set tintuc.tentintuc='".$tentt."', tintuc.noidungtintuc='".$noidung."', tintuc.urlanhtintuc='".$url."', tintuc.ngayviet='".$ngayviet."' where tintuc.idtintuc='".$id."';";
        $result=$this->conn->query($sql);
        return $result;
    }

    public function getTTfilter($id,$tentt){
        $sql = "select * from tintuc where tintuc.idtintuc like '%" . $id . "%' and tintuc.tentintuc like '%" . $tentt . "%' ";
        $result = $this->conn->query($sql);
        $array_tt = array();
        while ($row = $result->fetch_assoc()) {
            $tt= new tintuc($row['idtintuc'],$row['tentintuc'],$row['noidungtintuc'],$row['urlanhtintuc'],$row['ngayviet']);
            array_push($array_tt,$tt);
        }
        return $array_tt;
    }
}
?>
