<?php
require_once '../libs/config.php';
if($_GET['action']=='nodemcuAdd'){
    $result = '';
    $message = '';
    $key='';
    if (isset($_POST['addNodemcu'])&& is_numeric($_POST['addNodemcu'])) {
        $nodemcular = new Nodemcular();
        $nodemcular->Update();
        $result = "Success";
        $message = "Nodemcu ekleme işlemi başarılı.";
        
    } else {
        $result = "Missing";
        $message = "Boş veya hatalı veri girişi.";
    }
    $jsonData=json_encode(array('result'=>$result,'message'=>$message,'key'=>$key));
    echo $jsonData;
}