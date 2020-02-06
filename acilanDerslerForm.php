<?php
require_once 'libs/config.php';
$katalogO = new DersKatalog();
$katalog = $katalogO->SelectList(0,"","",0,0,0,$_SESSION['profession']);
$bolumlerO = new Bolumler();
$fakulte = $bolumlerO->SelectList($_SESSION['profession'])[0]['fakulte'];
$dersliklerO = new Derslikler();
$derslikler = $dersliklerO->SelectList(0,0,0,$fakulte);
$ogretimUyeleriO = new OgretimUyeleri();
$ogretimUyeleri = $ogretimUyeleriO->SelectList(0,"","","",$_SESSION['profession']);
?>
<!doctype html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <meta charset="UTF-8">
    <title><?php echo SITE_NAME; ?></title>

    <!--styles-->
    <?php require_once 'assets/styles/style-standard.php'; ?>

</head>
<body>

<?php
require_once 'includes/navbar.php';
require_once 'includes/sidebar.php';
?>

<div class="content">

    <div class="box-">
        <h1>
            Ders Aç
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-">
        <form method="post" id="dersAcForm" class="form label">
            <ul>
                <li>
                    <label for="ders">Ders Seç</label>
                    <div class="form-content">
                        <select name="ders" id="ders">
                            <?php foreach ($katalog as $key=>$value){?>
                                <option value="<?php echo $value['id']?>"><?php echo $value['ders_adi']?></option>
                            <?php }?>
                        </select>
                    </div>
                </li>
                <li>
                    <label for="derslik">Derslik Seç</label>
                    <div class="form-content">
                        <select name="derslik" id="derslik">
                            <?php foreach ($derslikler as $key=>$value){?>
                                <option value="<?php echo $value['id']?>"><?php echo $value['no']?></option>
                            <?php }?>
                        </select>
                    </div>
                </li>
                <li>
                    <label for="sube">Şube</label>
                    <div class="form-content">
                        <input type="number" min="1" id="sube" name="sube">
                    </div>
                </li>
                <li>
                    <label for="ogretim_uyesi">Öğretim Üyesi Seç</label>
                    <div class="form-content">
                        <select name="ogretim_uyesi" id="ogretim_uyesi">
                            <?php foreach ($ogretimUyeleri as $key=>$value){?>
                                <option value="<?php echo $value['id']?>"><?php echo $value['ad']." ".$value['soyad']?></option>
                            <?php }?>
                        </select>
                    </div>
                </li>
                <li>
                    <label for="ogrenci_sayisi">Öğrenci Sayısı</label>
                    <div class="form-content">
                        <input type="text" id="ogrenci_sayisi" name="ogrenci_sayisi">
                    </div>
                </li>
                <li>
                    <label for="gun">Gün</label>
                    <div class="form-content">
                        <select name="gun" id="gun">
                            <option value="1">Pazartesi</option>
                            <option value="2">Salı</option>
                            <option value="3">Çarşamba</option>
                            <option value="4">Perşembe</option>
                            <option value="5">Cuma</option>
                        </select>
                    </div>
                </li>
                <li>
                    <label for="saat">Saat</label>
                    <div class="form-content">
                        <input type="text" id="saat" name="saat">
                    </div>
                </li>
                <li class="submit">
                    <button type="submit">Ders Aç</button>
                </li>
            </ul>
        </form>
    </div>
</div>

<?php
require_once 'assets/scripts/script-standard.php';
require_once 'assets/scripts/script-acilanDerslerForm.php';
?>

</body>
</html>
