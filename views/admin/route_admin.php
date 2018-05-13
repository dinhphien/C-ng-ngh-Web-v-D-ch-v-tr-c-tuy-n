<?php
//session_start();
if(isset($_GET["controller"])&&isset($_GET["action"])){
    $controller= $_GET["controller"];
    $action= $_GET["action"];
}
else{
    $controller="controller_error";
    $action="error";
}
//echo json_encode($controller);
//echo $_GET['controller'];
//echo $_GET['name_sp'];
require_once (__DIR__."/../../controllers/".$controller.".php");
$control= new $controller;
$control->$action();
?>