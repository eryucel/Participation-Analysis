<?php
require_once '../libs/config.php';

if ($_GET['action'] == 'acilanDerslerAdd') {
$result = '';
$message = '';
if (isset($_POST['derslik']) && !empty($_POST['derslik'])
    && isset($_POST['ders']) && !empty($_POST['ders'])
    && isset($_POST['ogretim_uyesi']) && !empty($_POST['ogretim_uyesi'])
    && isset($_POST['gun']) && !empty($_POST['gun'])
    && isset($_POST['saat']) && !empty($_POST['saat'])) {
    $derslik = $_POST['derslik'];
    $ders = $_POST['ders'];
    $sube = $_POST['sube'];
    $ogretim_uyesi = $_POST['ogretim_uyesi'];
    $ogrenci_sayisi = $_POST['ogrenci_sayisi'];
    $gun = $_POST['gun'];
    $saat = $_POST['saat'];
    $acilan = new AcilanDersler();
    if ($acilan->Update(0, $derslik, $ders, $sube, $ogretim_uyesi, $ogrenci_sayisi, $gun, $saat)) {
        $result = "Success";
        $message = "Ders açma işlemi başarılı.";
    } else {
        $result = "Error";
        $message = "Ders açılamadı.";
    }
} else {
    $result = "Missing";
    $message = "Lütfen gerekli alanları doldurunuz.";
}
$jsonData = json_encode(array('result' => $result, 'message' => $message));
echo $jsonData;
}
elseif($_GET['action'] == 'acilanDerslerDelete')
{
    $katalog = new AcilanDersler();
    $katalog->Delete($_GET['id']);
    $result = 'Success';
    $message = 'Ders silme işlemi başarılı';
    $jsonData = json_encode(array('result' => $result, 'message' => $message));
    echo $jsonData;
}