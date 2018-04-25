<?php
require_once ("../models/model_taikhoan.php");
require_once ("../models/model_khachhang.php");
class controller_dangnhap{
    private $modelTK;
    private $modelKH;

    /**
     * controller_dangnhap constructor.
     * @param $modelTK
     * @param $modelKH
     */
    public function __construct()
    {
        $this->modelTK = new Model_Taikhoan();
        $this->modelKH = new Model_Khachhang();
    }
    public function Login(){
         
    }
    public function Logout(){

    }
    public function Register(){

    }


}
?>