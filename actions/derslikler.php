<?php
require_once '../libs/config.php';
if($_GET['action']=='derslikAdd'){
    $result = '';
    $message = '';
    if (isset($_POST['kapasite']) &&isset($_POST['no']) && is_numeric($_POST['no'])&& is_numeric($_POST['kapasite'])) {
        $bolum=new Bolumler();
        $fakulte= $bolum->SelectList($_SESSION['profession'])[0]['fakulte'];
        $no = $_POST['no'];
        $kapasite = $_POST['kapasite'];
        $derslikler = new Derslikler();
        $derslikler->Update(0, $no, $kapasite, $fakulte);
        $result = "Success";
        $message = "Ders ekleme işlemi başarılı.";
    } else {
        $result = "Missing";
        $message = "Boş veya hatalı veri girişi.";
    }
    $jsonData=json_encode(array('result'=>$result,'message'=>$message));
    echo $jsonData;
}