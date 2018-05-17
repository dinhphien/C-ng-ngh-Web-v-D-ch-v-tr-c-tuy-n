<?php
require_once (__DIR__."/base_controller.php");
require_once (__DIR__."/../models/model_tintuc.php");
require_once (__DIR__."/../models/tintuc.php");
class controller_tintuc {
    private $modelTT;

    /**
     * controller_tintuc constructor.
     * @param $modelTT
     */
    public function __construct()
    {
        $this->modelTT=new Model_Tintuc();
    }

    public function showTT(){
        $dataTT=$this->modelTT->getTT();
        require_once(__DIR__ . "/../views/khachhang/blog.php");
    }

    public function showTT_detailname(){
        $data=$this->modelTT->getTT_ten($_GET['ten_tt']);
        $tt=$data;
        require_once(__DIR__ . "/../views/khachhang/post.php");
    }

    public function showTTadmin(){
        $dataTT=$this->modelTT->getTT();
        require_once(__DIR__ . "/../views/admin/news.php");
    }

    public function showTTadmindetail(){
        $data=$this->modelTT->getTT_id($_GET['id_tt']);
        $tt=$data;
        require_once(__DIR__ . "/../views/admin/detail.php");
    }

    public function delTTadmin(){
        $this->modelTT->delTT($_GET['id_tt']);
        $dataTT=$this->modelTT->getTT();
        require_once(__DIR__ . "/../views/admin/news.php");
    }
}
?>
