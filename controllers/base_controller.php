<?php
class base_controller{
    public function Load_View($data,$file_view){


    }
    public function Response_Ajax($data){
        return json_encode($data);
    }

}
?>