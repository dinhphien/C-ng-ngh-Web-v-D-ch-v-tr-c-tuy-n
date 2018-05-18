<?php

require_once (__DIR__ . "/base_controller.php");
require_once (__DIR__ . "/../models/model_sanpham.php");
require_once (__DIR__ . "/../models/sanpham.php");

class controller_sanpham {

    private $modelSP;

    /**
     * controller_sanpham constructor.
     * @param $modelSP
     */
    public function __construct() {
        $this->modelSP = new Model_Sanpham();
    }

//    public function loadView($data_control)
//    {
//        $data=$data_control;
//        require_once(__DIR__ . "/../views/khachhang/category.php");
//        
//    }
    public function showSP_all() {
        $data = $this->modelSP->getSP_all();
        require_once(__DIR__ . "/../views/admin/product.php");
    }

    public function filter() {
        $data = $this->modelSP->filter($_POST['id'], $_POST['name'], $_POST['category']);
        echo json_encode($data);
    }

    public function showSP_by_ID() {
        $data = $this->modelSP->getSP_By_ID($_POST['id_sp']);
        echo json_encode($data);
    }

    public function update() {
        //var_dump($FILES['file']);
        if (isset($_FILES['file'])) {
            if ($_FILES['file']['error'][0] == 0) {
                $file1 = "F:/workspace/Cong_nghe_Web_and_Dich_vu_truc_tuyen/views/admin/" . $_POST['url'];
                unlink($file1);
                $file2 = "F:/workspace/Cong_nghe_Web_and_Dich_vu_truc_tuyen/views/khachhang/" . $_POST['url'];
                unlink($file2);
                $this->modelSP->up_anh($_FILES['file']['tmp_name'], $_FILES['file']['name']);
                $result = true;
                $result = $this->modelSP->update($_POST['id'], $_POST['ten'], $_POST['loai'], $_POST['gia'], $_POST['size'], $_POST['soluong'], $_POST['mausac'], "img/" . $_FILES['file']['name'], $_POST['mota']);
                return json_encode($result);
            } else {
                
            };
        } else {
            $result = $this->modelSP->update($_POST['id'], $_POST['ten'], $_POST['loai'], $_POST['gia'], $_POST['size'], $_POST['soluong'], $_POST['mausac'], $_POST['url'], $_POST['mota']);
            return json_encode($result);
        };
    }

    public function insert() {
        //var_dump($_POST);
        if (isset($_FILES['anh'])) {
            if ($_FILES['anh']['error'][0] == 0) {
//                $file1="F:/workspace/Cong_nghe_Web_and_Dich_vu_truc_tuyen/views/admin/".$_POST['url'];
//                unlink($file1);
//                $file2="F:/workspace/Cong_nghe_Web_and_Dich_vu_truc_tuyen/views/khachhang/".$_POST['url'];
//                unlink($file2);
                $this->modelSP->up_anh($_FILES['anh']['tmp_name'], $_FILES['anh']['name']);
             
                $this->modelSP->insert($_POST['ten'], $_POST['loai'], $_POST['gia'], $_POST['size'], $_POST['soluong'], $_POST['mausac'], "img/" . $_FILES['anh']['name'], $_POST['mota']);
                 $result = "Thành công";
                require_once(__DIR__ . "/../views/admin/form.php");
            } else {
                
            };
        } else {
            
            $this->modelSP->update($_POST['ten'], $_POST['loai'], $_POST['gia'], $_POST['size'], $_POST['soluong'], $_POST['mausac'], $_POST['url'], $_POST['mota']);
             $result = "Thành công";
            require_once(__DIR__ . "/../views/admin/form.php");
        };
    }
    public function xoasp(){
        $this->modelSP->xoasp($_POST['id']);
    }

    public function showSP_type() {
        $data = $this->modelSP->getSP_type($_GET['type_sp']);
        require_once(__DIR__ . "/../views/khachhang/category.php");
    }

    public function showSP_name() {
        $data = $this->modelSP->getSP_name($_GET['type_sp'], $_GET['name_sp']);
        require_once(__DIR__ . "/../views/khachhang/category.php");
    }

    public function showSP_ajax() {
        
    }

    public function showSP_detail() {
        $data = $this->modelSP->getSP_id($_GET['id_sp']);
        $sp = $data;
        $data_sp = $this->modelSP->getSP_type_limit($sp->getLoaisanpham(), 0, 4);
        require_once (__DIR__ . "/../views/khachhang/detail.php");
    }

    public function showSP_type_mausac() {
        $array_sp = $this->modelSP->getSP_type_mausac($_POST['type_sp'], $_POST['mausac_sp']);
        echo json_encode($array_sp);
    }

    public function showSP_type_name_mausac() {
        $array_sp = $this->modelSP->getSP_type_name_mausac($_POST['type_sp'], $_POST['name_sp'], $_POST['mausac_sp']);
        echo json_encode($array_sp);
    }

    public function showSP_type_size() {
        $array_sp = $this->modelSP->getSP_type_size($_POST['type_sp'], $_POST['size_sp']);
        echo json_encode($array_sp);
    }

    public function showSP_type_gia() {
        $array_sp = $this->modelSP->getSP_type_gia($_POST['type_sp'], $_POST['gia_sp']);
        echo json_encode($array_sp);
    }

    public function showSP_type_name_size() {
        $array_sp = $this->modelSP->getSP_type_name_size($_POST['type_sp'], $_POST['name_sp'], $_POST['size_sp']);
        echo json_encode($array_sp);
    }

    public function showSP_type_name_gia() {
        $array_sp = $this->modelSP->getSP_type_name_gia($_POST['type_sp'], $_POST['name_sp'], $_POST['gia_sp']);
        echo json_encode($array_sp);
    }

}

?>