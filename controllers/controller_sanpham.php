<?php
require_once (__DIR__."/base_controller.php");
require_once (__DIR__."/../models/model_sanpham.php");
require_once (__DIR__."/../models/sanpham.php");
class controller_sanpham {
    private $modelSP;

    /**
     * controller_sanpham constructor.
     * @param $modelSP
     */
    public function __construct()
    {
        $this->modelSP=new Model_Sanpham();
    }
//    public function loadView($data_control)
//    {
//        $data=$data_control;
//        require_once(__DIR__ . "/../views/khachhang/category.php");
//    }
    public function showSP_type(){
        $data=$this->modelSP->getSP_type($_GET['type_sp']);
        require_once(__DIR__ . "/../views/khachhang/category.php");
    }
    public function showSP_name(){
        $data=$this->modelSP->getSP_name($_GET['type_sp'],$_GET['name_sp']);
        require_once(__DIR__ . "/../views/khachhang/category.php");
    }
    public function showSP_ajax(){

    }
    public function showSP_detail(){
        $data=$this->modelSP->getSP_id($_GET['id_sp']);
        $sp=$data;
        $data_sp=$this->modelSP->getSP_type_limit($sp-> getLoaisanpham(),0,4);
        require_once (__DIR__."/../views/khachhang/detail.php");

    }
    public function showSP_type_mausac(){
        $array_sp=$this->modelSP->getSP_type_mausac($_POST['type_sp'],$_POST['mausac_sp']);
        echo json_encode($array_sp);
    }
    public function showSP_type_name_mausac(){
        $array_sp=$this->modelSP->getSP_type_name_mausac($_POST['type_sp'],$_POST['name_sp'],$_POST['mausac_sp']);
        echo json_encode($array_sp);

    }
    public function showSP_type_size(){
        $array_sp=$this->modelSP->getSP_type_size($_POST['type_sp'],$_POST['size_sp']);
        echo json_encode($array_sp);

    }
    public function showSP_type_gia(){
        $array_sp=$this->modelSP->getSP_type_gia($_POST['type_sp'],$_POST['gia_sp']);
        echo json_encode($array_sp);

    }
    public function showSP_type_name_size(){
        $array_sp=$this->modelSP->getSP_type_name_size($_POST['type_sp'],$_POST['name_sp'],$_POST['size_sp']);
        echo json_encode($array_sp);

    }
    public function showSP_type_name_gia(){
        $array_sp=$this->modelSP->getSP_type_name_gia($_POST['type_sp'],$_POST['name_sp'],$_POST['gia_sp']);
        echo json_encode($array_sp);

    }
}
?>