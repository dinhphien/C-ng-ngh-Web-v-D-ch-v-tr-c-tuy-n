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
}
?>
