<?php
require_once 'libs/config.php';
$uyelerO = new OgretimUyeleri();
if(isset($_GET['page'])&&!empty($_GET['page']))
{
    $uyeler = $uyelerO->SelectList(0,'','','',$_SESSION['profession'],($_GET['page']-1)*10,10);
}
else
{
    $uyeler = $uyelerO->SelectList(0,'','','',$_SESSION['profession']);
    $_SESSION['uyelerPagination']=count($uyeler)%10==0?count($uyeler)/10:count($uyeler)/10+1;
    $uyeler = $uyelerO->SelectList(0,'','','',$_SESSION['profession'],0,10);
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
            All Posts
            <a href="ogretimUyeForm.php">Öğretim Üyesi Ekle</a>
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Ad Soyad</th>
                <th class="hide">Numara</th>
                <th class="hide">Bölüm</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($uyeler as $key){?>
                <tr>
                    <td>
                        <a href="#" class="title">
                            <?php echo $key['ad'].' '.$key['soyad']?>
                        </a>
                        <div class="magic-links">
                            <a href="ogretimUyeForm.php?id=<?php echo $key['id']?>">Düzenle</a> | <a href="#" onclick="ogretimUyesiDelete(<?php echo $key['id']?>)" class="trash">Sil</a>
                        </div>
                    </td>
                    <td class="hide">
                        <a href="#">
                            <?php echo $key['numara']?>
                        </a>
                    </td>
                    <td class="hide">
                        <a href="#">
                            <?php $ob = new Bolumler();echo $ob->SelectList($key['bolum'])[0]['ad']?>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>

    <div class="pagination">
        <ul>
            <?php for ($i=1;$i<=$_SESSION['uyelerPagination'];$i++){?>
                <li>
                    <a href="ogretimUyeleri.php?page=<?php echo $i?>">
                        <?php echo $i?>
                    </a>
                </li>
            <?php }?>
        </ul>
    </div>
</div>

<?php
require_once 'assets/scripts/script-standard.php';
require_once 'assets/scripts/script-ogretimUyeleri.php';
?>

</body>
</html>
