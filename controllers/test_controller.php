<?php
require_once ("../models/DBconnector.php");
class test_controller{

    /**
     * test_controller constructor.
     * @param $conn
     */
    public function __construct()
    {

    }
    public function testdata(){
        $data=array("phien"=>"đẹp trai");
        return $data;
    }
    public function loadview($data){
        extract($data);
        ob_start();
        require_once ("../views/khachhang/testview.php");
        $content = ob_get_clean();
        echo $content;
    }
    public function test(){
        $datares=$this->testdata();
        $this->loadview($datares);
    }
}
?>