<?php
require_once '../libs/config.php';
if(isset($_POST)&&!empty($_POST)&&isset($_POST['email'])&&isset($_POST['password'])){
    $result='';
    $message='';

    $email=$_POST['email'];
    $password=$_POST['password'];

    if(!empty($email)&&!empty($password)){
        $uyeler=new Uyeler();
        $uye=$uyeler->SelectList(0,$email,$password);
        if(empty($uye)){
            $result='login_failed';
             $message='Girilen bilgiler hatalı.';
        }
        else{
            $uye=$uye[0];
            $_SESSION['id']=$uye['id'];
            $_SESSION['name']=$uye['ad'];
            $_SESSION['surname']=$uye['soyad'];
            $_SESSION['profession']=$uye['bolum'];
            $_SESSION['profession_name']=(new Bolumler)->SelectList($uye['bolum'])[0]['ad'];
            $_SESSION['register_date']=$uye['uyelik_tarihi'];
            $_SESSION['email']=$uye['email'];
             $result='login_success';
             $message='Giriş başarılı.';
        }
    }
    else{
         $result='empty';
         $message='E-mail ve şifre alanları boş olamaz.';
    }
    
    


    $jsonData=json_encode(array('result'=>$result,'message'=>$message));
    echo $jsonData;
}
else{
    $result='missing_data';
    $message='Eksik veri girişi.';

    $jsonData=json_encode(array('result'=>$result,'message'=>$message));

    echo $jsonData;
}