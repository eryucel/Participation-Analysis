<?php
require_once 'libs/config.php';
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
            Derslik Ekle
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-">
        <form method="post" id="derslikEkle" class="form label">
            <ul>
                <li>
                    <label for="ogrenci_sayisi">Derslik Numarası</label>
                    <div class="form-content">
                        <input type="text" id="no" name="no">
                    </div>
                </li>
                <li>
                    <label for="ogrenci_sayisi">Kapasite</label>
                    <div class="form-content">
                        <input type="text" id="kapasite" name="kapasite">
                    </div>
                </li>
                
                <li class="submit">
                    <button type="submit">Derslik Ekle</button>
                </li>
            </ul>
        </form>
    </div>
</div>

<?php
require_once 'assets/scripts/script-standard.php';
require_once 'assets/scripts/script-derslikler.php';
?>

</body>
</html>
