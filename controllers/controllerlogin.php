<?php
session_start();
require_once ("../models/DAO.php");
$array= array();
if (!empty($_POST)){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $dao= new DAO();
    $taikhoan=$dao->getTaiKhoan($username,$password);
    if($taikhoan!=null){
        $_SESSION['logged-in']=$taikhoan;
        $array['mesage']='success';
        $array['tentaikhoan']=$taikhoan->getTentaikhoan();
        $array['vaitro']=$taikhoan->getVaitro();
        echo json_encode($array);
    }
    else{
        $array['mesage']='failed';
        echo json_encode($array);
    }

}
?>