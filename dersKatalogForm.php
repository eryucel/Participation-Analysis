<?php
require_once 'libs/config.php';
if(isset($_GET['id']))
{
    $katalogO = new DersKatalog();
    $katalog = $katalogO->SelectList($_GET['id'])[0];
}
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
            Ders Ekle
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-">
        <?php
        if(isset($_GET['id']))
        {?>
        <form method="post" id="dersKatalogFormEdit" class="form label">
            <ul>
                <li>
                    <label for="ders_adi">Ders Adı</label>
                    <div class="form-content">
                        <input type="text" id="ders_adi" name="ders_adi" value="<?php echo $katalog['ders_adi']?>">
                    </div>
                </li>
                <li>
                    <label for="ders_kodu">Ders Kodu</label>
                    <div class="form-content">
                        <input type="text" id="ders_kodu" name="ders_kodu" value="<?php echo $katalog['ders_kodu']?>">
                    </div>
                </li>
                <li>
                    <label for="akts">AKTS</label>
                    <div class="form-content">
                        <input type="text" id="akts" name="akts" value="<?php echo $katalog['akts']?>">
                    </div>
                </li>
                <li>
                    <label for="ogrenci_sayisi">Öğrenci Sayısı</label>
                    <div class="form-content">
                        <input type="text" id="ogrenci_sayisi" name="ogrenci_sayisi" value="<?php echo $katalog['ogrenci_sayisi']?>">
                    </div>
                </li>
                <li>
                    <label for="sure">Süre</label>
                    <div class="form-content">
                        <input type="text" id="sure" name="sure" value="<?php echo $katalog['sure']?>">
                    </div>
                </li>
                </li>
                <li class="submit">
                    <button type="submit">Kaydet</button>
                </li>
            </ul>
        </form>
        <?php }else{?>
        <form method="post" id="dersKatalogForm" class="form label">
            <ul>
                <li>
                    <label for="ders_adi">Ders Adı</label>
                    <div class="form-content">
                        <input type="text" id="ders_adi" name="ders_adi">
                    </div>
                </li>
                <li>
                    <label for="ders_kodu">Ders Kodu</label>
                    <div class="form-content">
                        <input type="text" id="ders_kodu" name="ders_kodu">
                    </div>
                </li>
                <li>
                    <label for="akts">AKTS</label>
                    <div class="form-content">
                        <input type="text" id="akts" name="akts">
                    </div>
                </li>
                <li>
                    <label for="ogrenci_sayisi">Öğrenci Sayısı</label>
                    <div class="form-content">
                        <input type="text" id="ogrenci_sayisi" name="ogrenci_sayisi">
                    </div>
                </li>
                <li>
                    <label for="sure">Süre</label>
                    <div class="form-content">
                        <input type="text" id="sure" name="sure">
                    </div>
                </li>
                </li>
                <li class="submit">
                    <button type="submit">Ders Ekle</button>
                </li>
            </ul>
        </form>
        <?php }?>
    </div>
</div>

<?php
require_once 'assets/scripts/script-standard.php';
require_once 'assets/scripts/script-dersKatalogForm.php';
?>

</body>
</html>
