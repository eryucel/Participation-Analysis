<?php
require_once '../libs/config.php';
if ($_GET['action'] == 'dersKatalogEdit') {
    $result = '';
    $message = '';
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        if (isset($_POST['ders_adi']) && !empty($_POST['ders_adi'])) {
            $id = $_GET['id'];
            $ders_adi = $_POST['ders_adi'];
            $ders_kodu = $_POST['ders_kodu'];
            $akts = $_POST['akts'];
            $ogrenci_sayisi = $_POST['ogrenci_sayisi'];
            $sure = $_POST['sure'];
            $bolum = $_SESSION['profession'];
            $katalog = new DersKatalog();
            if ($katalog->Update($id, $ders_adi, $ders_kodu, $akts, $ogrenci_sayisi, $sure, $bolum)) {
                $result = "Success";
                $message = "Ders ekleme işlemi başarılı.";
            } else {
                $result = "Error";
                $message = "Ders ekleme işlemi başarısız oldu.";
            }
        } else {
            $result = "Missing";
            $message = "Ders adı boş olamaz.";
        }
    }
    $jsonData = json_encode(array('result' => $result, 'message' => $message));
    echo $jsonData;
}
elseif ($_GET['action'] == 'dersKatalogAdd') {
    $result = '';
    $message = '';
    if (isset($_POST['ders_adi']) && !empty($_POST['ders_adi'])) {
        $ders_adi = $_POST['ders_adi'];
        $ders_kodu = $_POST['ders_kodu'];
        $akts = $_POST['akts'];
        $ogrenci_sayisi = $_POST['ogrenci_sayisi'];
        $sure = $_POST['sure'];
        $bolum = $_SESSION['profession'];
        $katalog = new DersKatalog();
        $id = $katalog->Update(0, $ders_adi, $ders_kodu, $akts, $ogrenci_sayisi, $sure, $bolum);
        $result = "Success";
        $message = "Ders ekleme işlemi başarılı.";
    } else {
        $result = "Missing";
        $message = "Ders adı boş olamaz.";
    }
    $jsonData = json_encode(array('result' => $result, 'message' => $message));
    echo $jsonData;
}
elseif ($_GET['action'] == 'dersKatalogDelete') {
    $katalog = new DersKatalog();
    $katalog->Delete($_GET['id']);
    $result = 'Success';
    $message = 'Ders silme işlemi başarılı';
    $jsonData = json_encode(array('result' => $result, 'message' => $message));
    echo $jsonData;
}
