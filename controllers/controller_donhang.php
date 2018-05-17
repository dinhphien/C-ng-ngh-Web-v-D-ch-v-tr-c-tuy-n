<?php
require_once (__DIR__."/../models/model_sanpham.php");
require_once (__DIR__."/../models/model_khachhang.php");
require_once (__DIR__."/../models/model_donhang.php");
require_once (__DIR__."/base_controller.php");
require_once (__DIR__."/../models/taikhoan.php");
class controller_donhang extends base_controller {
    private $modelSP;
    private $modelKH;
    private $modelDH;

    /**
     * _controllerDonhang constructor.
     * @param $conn
     */
    public function __construct()
    {
        $this->modelSP=new Model_Sanpham();
        $this->modelKH= new Model_Khachhang();
        $this->modelDH= new Model_Donhang();
    }

    public function create_donhang(){
        session_start();
        $result=true;
        $th_tien=$_POST['th_tien'];
        $ht_thanhtoan=$_POST['ht_thanhtoan'];
        $ngaylap=date("d/m/Y");
        if(isset($_SESSION['logged_user'])){
            $id_khachhang=$_SESSION['logged_user']->getIdtaikhoan();
            $result=$this->modelDH->insert_donhang($id_khachhang,$th_tien,$ngaylap,$ht_thanhtoan,"Chưa Duyệt");
            if($result==true){
                $id_dh=$this->modelDH->getLast_id_inserted();
                $array_sp_donhang=$this->modelSP->getSP_giohang_by_idkhachhang($id_khachhang);
                $this->modelDH->insert_sp_donhang($id_dh,$array_sp_donhang);
                $array_sp_moi=$this->modelDH->get_SP_sau_dathang($id_dh);
                $this->modelSP->update_SP_sau_dathang($array_sp_moi);
                $result=$this->modelDH->delete_sp_giohang_by_id_khachhang($id_khachhang);
            }else{
                $result=false;
            }
        }else{
            if(isset($_SESSION['shop_cart'])){
                $id_khachhang=$_SESSION['id_khach_muahang'];
                $result=$this->modelDH->insert_donhang($id_khachhang,$th_tien,$ngaylap,$ht_thanhtoan,"Chưa Duyệt");
                if($result==true){
                    $id_dh=$this->modelDH->getLast_id_inserted();
                    $array_sp_donhang=$_SESSION['shop_cart'];
                    $result=$this->modelDH->insert_sp_donhang($id_dh,$array_sp_donhang);
                    $array_sp_moi=$this->modelDH->get_SP_sau_dathang($id_dh);
                    $this->modelSP->update_SP_sau_dathang($array_sp_moi);
                    unset($_SESSION["shop_cart"]);
                }else{
                    $result=false;
                }
            }
        }

        echo json_encode($result);
    }
    public function show_dh(){
        $data = $this->modelDH->show_dh();
        require_once(__DIR__ . "/../views/admin/order.php");
    }
    public function show_donhang_by_ID(){
        $data = $this->modelDH->show_donhang_by_ID($_POST['iddonhang']);
//        var_dump($data);
        echo json_encode($data);
    }
       public function duyet_don_hang(){
        $data = $this->modelDH->duyet_don_hang($_POST['id']);
//        var_dump($data);
        echo json_encode($data);
    }
}
?>