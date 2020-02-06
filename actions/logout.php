<?php
require_once '../libs/config.php';
$result='';
$message='';
if(session_destroy()){
    $result='logout_success';
    $message='Çıkış işlemi başarılı.';
}
else{
    $result='logout_failed';
    $message='Çıkış işlemi başarısız.';
}
    $jsonData=json_encode(array('result'=>$result,'message'=>$message));
    echo $jsonData;