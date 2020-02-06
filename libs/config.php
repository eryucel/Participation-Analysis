<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/libs/definitions.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/libs/functions.php';

spl_autoload_register(function ($class_name) {
    require_once ROOT_PATH."/classes/".$class_name . '.php';
});
$MasterDb=new Database();
if(!isset($_SESSION)||empty($_SESSION))
session_start();
$filename=basename($_SERVER["SCRIPT_FILENAME"], '.php');
if($filename!='login'&&$filename!='etkilesim'){
    if(!isset($_SESSION['name'])||!isset($_SESSION['surname'])) {
        header("Location: login.php");
        die();
    }
}
