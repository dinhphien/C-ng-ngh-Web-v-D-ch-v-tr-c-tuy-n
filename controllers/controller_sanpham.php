<?php
require_once ("base_controller.php");
require_once ("../models/model_sanpham.php");
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
    public function showSP(){


    }


}
?>