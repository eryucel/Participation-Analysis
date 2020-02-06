<?php
require_once 'libs/config.php';
if(isset($_GET['id']))
{
    $uyelerO = new OgretimUyeleri();
    $uyeler = $uyelerO->SelectList($_GET['id'])[0];
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
            Öğretim Üyesi Ekle
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-">

        <?php
        if(isset($_GET['id']))
        {?>
        <form method="post" id="ogretimUyesiEdit" class="form label">
            <ul>
                <li>
                    <label for="ad">Ad</label>
                    <div class="form-content">
                        <input type="text" id="ad" name="ad" value="<?php echo $uyeler['ad']?>">
                    </div>
                </li>
                <li>
                    <label for="soyad">Soyad</label>
                    <div class="form-content">
                        <input type="text" id="soyad" name="soyad" value="<?php echo $uyeler['soyad']?>">
                    </div>
                </li>
                <li>
                    <label for="numara">Numara</label>
                    <div class="form-content">
                        <input type="text" id="numara" name="numara" value="<?php echo $uyeler['numara']?>">
                    </div>
                </li>
                
                <li class="submit">
                    <button type="submit">Kaydet</button>
                </li>
            </ul>
        </form>
        <?php }else{?>
        <form method="post" id="ogretimUyesiEkle" class="form label">
            <ul>
                <li>
                    <label for="ad">Ad</label>
                    <div class="form-content">
                        <input type="text" id="ad" name="ad">
                    </div>
                </li>
                <li>
                    <label for="soyad">Soyad</label>
                    <div class="form-content">
                        <input type="text" id="soyad" name="soyad">
                    </div>
                </li>
                <li>
                    <label for="numara">Numara</label>
                    <div class="form-content">
                        <input type="text" id="numara" name="numara">
                    </div>
                </li>

                <li class="submit">
                    <button type="submit">Ekle</button>
                </li>
            </ul>
        </form>
        <?php }?>
    </div>
</div>

<?php
require_once 'assets/scripts/script-standard.php';
require_once 'assets/scripts/script-ogretimUyeForm.php';
?>

</body>
</html>
