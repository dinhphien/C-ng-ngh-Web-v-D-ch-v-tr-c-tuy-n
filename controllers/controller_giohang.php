<?php
require_once (__DIR__."/../controllers/base_controller.php");
require_once (__DIR__."/../models/model_sanpham.php");
require_once (__DIR__."/../models/taikhoan.php");
class controller_giohang extends base_controller{
     private $modelSP;

    /**
     * controller_giohang constructor.
     * @param $modelTK
     */
    public function __construct()
    {
        $this->modelSP = new Model_Sanpham();
    }

    public function add_SP(){
         session_start();
         $tk=$_SESSION['logged_user'];
         $result=$this->modelSP->themSP_giohang($tk->getIdtaikhoan(),$_POST['id']);
         echo json_encode($result);
     }
     public function remove_SP(){

     }
     public function update_SP(){

     }

}
?>