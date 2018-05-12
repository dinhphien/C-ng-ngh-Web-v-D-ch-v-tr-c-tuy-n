<?php
require_once (__DIR__."/../models/model_sanpham.php");
require_once (__DIR__."/../models/model_khachhang.php");
require_once (__DIR__."/../models/model_donhang.php");
class controller_donhang extends base_controller {
    private $model_SP;
    private $model_KH;
    private $model_DH;

    /**
     * controller_donhang constructor.
     * @param $model_SP
     * @param $model_KH
     */
    public function __construct()
    {
        $this->model_SP = new Model_Sanpham();
        $this->model_KH = new Model_Khachhang();
        $this->model_DH= new Model_Donhang();
    }
    public function create_donhang(){
        session_start();
        $result="true";
        if(isset($_SESSION['logged_user'])){
//            $result=$this->modelSP->remove_SP_giohang_by_id($_SESSION['logged_user']->getIdtaikhoan(),$_POST['id']);

        }else{
            if(isset($_SESSION['shop_cart'])){
//                unset($_SESSION['shop_cart'][$_POST['id']]);

            }
        }
    }

}
?>

