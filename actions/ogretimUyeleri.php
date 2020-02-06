<?php
require_once '../libs/config.php';
if($_GET['action']=='ogretimUyesiAdd'){
    $result = '';
    $message = '';
    if (isset($_POST['ad']) &&isset($_POST['soyad'])&&isset($_POST['numara']) && is_numeric($_POST['numara'])) {
        $bolum=$_SESSION['profession'];
        $ad = $_POST['ad'];
        $soyad = $_POST['soyad'];
        $numara = $_POST['numara'];
        $ogretimUyeleri = new OgretimUyeleri();
        if($ogretimUyeleri->Update(0, $ad, $soyad,$numara, $bolum))
        {
            $result = "Success";
            $message = "Öğretim Üyesi ekleme işlemi başarılı.";
        }
        else{
            $result = "Error";
            $message = "Bir hata oluştu.";
        }
    } else {
        $result = "Missing";
        $message = "Boş veya hatalı veri girişi.";
    }
    $jsonData=json_encode(array('result'=>$result,'message'=>$message));
    echo $jsonData;
}
elseif ($_GET['action']=='ogretimUyesiEdit')
{
    $result = '';
    $message = '';
    if (isset($_POST['ad']) &&isset($_POST['soyad'])&&isset($_POST['numara']) && is_numeric($_POST['numara'])) {
        $id=$_GET['id'];
        $bolum=$_SESSION['profession'];
        $ad = $_POST['ad'];
        $soyad = $_POST['soyad'];
        $numara = $_POST['numara'];
        $ogretimUyeleri = new OgretimUyeleri();
        if($ogretimUyeleri->Update($id, $ad, $soyad,$numara, $bolum))
        {
            $result = "Success";
            $message = "Öğretim Üyesi düzenleme işlemi başarılı.";
        }
        else{
            $result = "Error";
            $message = "Bir hata oluştu.";
        }
    } else {
        $result = "Missing";
        $message = "Boş veya hatalı veri girişi.";
    }
    $jsonData=json_encode(array('result'=>$result,'message'=>$message));
    echo $jsonData;
}
elseif ($_GET['action'] == 'ogretimUyesiDelete') {
    $uye = new OgretimUyeleri();
    $uye->Delete($_GET['id']);
    $result = 'Success';
    $message = 'Öğretim üyesi silme işlemi başarılı';
    $jsonData = json_encode(array('result' => $result, 'message' => $message));
    echo $jsonData;
}