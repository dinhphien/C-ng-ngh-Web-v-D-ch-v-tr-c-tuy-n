<?php
require_once ('../models/DAO.php');

if(!empty($_POST)){
    $dao=new DAO();
    $usr=$_POST['username_register'];
    $psd=$_POST['password_register'];
    $fulname=$_POST['fullname_register'];
    $email=$_POST['email_register'];
    $phone=$_POST['mobilephone_register'];
    $adr=$_POST['address_register'];
    $message =$dao->insertTaiKhoan($usr,$psd);
    if($message=='true'){
        $lastid=$dao->getLastid();
        $message=$dao->insertKhachHang($lastid,$fulname,$email,$phone,$adr);
        echo json_encode("true");
    }
    else{
        echo json_encode("false");
    }


}

?>