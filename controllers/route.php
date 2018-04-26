<?php
session_start();
if(isset($_GET["controller"])&&isset($_GET["action"])){
    $controller= $_GET["controller"];
     $action= $_GET["action"];
}
else{
    $controller="controller_error";
    $action="error";
}
require_once ($controller.".php");
$control= new $controller;
$control->$action();
?>