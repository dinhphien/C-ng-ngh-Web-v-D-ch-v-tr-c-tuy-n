<?php
require_once (__DIR__."/../controllers/base_controller.php");
require_once (__DIR__."/../models/model_sanpham.php");
require_once (__DIR__."/../models/sanpham.php");
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
        $result="true";
        if(isset($_SESSION['logged_user'])){
            $tk=$_SESSION['logged_user'];
            $result=$this->modelSP->themSP_giohang($tk->getIdtaikhoan(),$_POST['id']);
        }else{
            $sp=$this->modelSP->getSP_id($_POST['id']);
            if(isset($_SESSION['shop_cart'][$_POST['id']])){
                $sl_cu=$_SESSION['shop_cart'][$_POST['id']]->getSoluongsanpham();
                $sp->setSoluongsanpham($sl_cu+1);
                $_SESSION['shop_cart'][$_POST['id']]=$sp;

            }else{
                $sp->setSoluongsanpham(1);
                $_SESSION['shop_cart'][$_POST['id']]=$sp;
            }
        }
        echo json_encode($result);
     }
     public function showSP_giohang(){
         session_start();
         $array_sp=array();
         if(isset($_SESSION['logged_user'])){
             $tk=$_SESSION['logged_user'];
             $result=$this->modelSP->getSP_giohang_by_idkhachhang($tk->getIdtaikhoan());
             $array_sp=$result;

         }else{
             if(isset($_SESSION['shop_cart'])){
                 $array_sp=$_SESSION['shop_cart'];
             }
         }
         require_once (__DIR__."/../views/khachhang/basket.php");
     }
     public function remove_SP(){
        session_start();
        $result="true";
        if(isset($_SESSION['logged_user'])){
            $result=$this->modelSP->remove_SP_giohang_by_id($_SESSION['logged_user']->getIdtaikhoan(),$_POST['id']);
        }else{
            if(isset($_SESSION['shop_cart'])){
                unset($_SESSION['shop_cart'][$_POST['id']]);
            }
        }
        echo json_encode($result);
     }
     public function update_SP(){
//        $data1=$_POST['id'];
//        $data2=$_POST['sl'];
//        echo json_encode($data1);

//        require_once (__DIR__."/../views/khachhang/testview.php");
        session_start();
        $result="true";
         if(isset($_SESSION['logged_user'])){
             $result=$this->modelSP->update_SP_giohang_by_id($_SESSION['logged_user']->getIdtaikhoan(),$_POST['id'],$_POST['sl']);
         }else{
             if(isset($_SESSION['shop_cart'])){
                 $sp=$_SESSION['shop_cart'][$_POST['id']];
                 $sp->setSoluongsanpham($_POST['sl']);
                 $_SESSION['shop_cart'][$_POST['id']]=$sp;

             }
         }
         echo json_encode($result);

     }

}
?>