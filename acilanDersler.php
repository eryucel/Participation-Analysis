<?php
require_once 'libs/config.php';
$derslerO = new AcilanDersler();
if(isset($_GET['page'])&&!empty($_GET['page']))
{
    $dersler = $derslerO->SelectList(0,0,0,0,0,0,0,'00:00:00',($_GET['page']-1)*10,10);
}
else
{
    $dersler = $derslerO->SelectList(0,0,0,0,0,0,0,'00:00:00');
    $_SESSION['acilanDerslerPagination']=count($dersler)%10==0?count($dersler)/10:count($dersler)/10+1;
    $dersler = $derslerO->SelectList(0,0,0,0,0,0,0,'00:00:00',0,10);
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
            <a href="acilanDerslerForm.php">Ders Aç</a>
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Ders</th>
                <th class="hide">Öğretim Üyesi</th>
                <th class="hide">Derslik</th>
                <th class="hide">Şube</th>
                <th class="hide">Öğrenci Sayısı</th>
                <th class="hide">Gün-Saat</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($dersler as $key){?>
                <tr>
                    <td>
                        <a href="#" class="title">
                            <?php $ders = new DersKatalog();echo $ders->SelectList($key['ders'])[0]['ders_adi']?>
                        </a>
                        <div class="magic-links">
                            <a href="#" onclick="acilanDerslerDelete(<?php echo $key['id']?>)" class="trash">Sil</a>
                        </div>
                    </td>
                    <td class="hide">
                        <a href="#">
                            <?php $ou = new OgretimUyeleri();echo $ou->SelectList($key['ogretim_uyesi'])[0]['ad'].' '.$ou->SelectList($key['ogretim_uyesi'])[0]['soyad'];?>
                        </a>
                    </td>
                    <td class="hide">
                        <a href="#">
                            <?php $derslik = new Derslikler();echo $derslik->SelectList($key['derslik'])[0]['no']?>
                        </a>
                    </td>
                    <td class="hide">
                        <a href="#">
                            <?php echo $key['sube']?>
                        </a>
                    </td>
                    <td class="hide">
                        <a href="#">
                            <?php echo $key['ogrenci_sayisi']?>
                        </a>
                    </td>
                    <td class="hide">
                        <a href="#">
                            <?php echo $key['gun']. ' '. $key['saat']?>
                        </a>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>

    <div class="pagination">
        <ul>
            <?php for ($i=1;$i<=$_SESSION['acilanDerslerPagination'];$i++){?>
                <li>
                    <a href="acilanDersler.php?page=<?php echo $i?>">
                        <?php echo $i?>
                    </a>
                </li>
            <?php }?>
        </ul>
    </div>
</div>

<?php
require_once 'assets/scripts/script-standard.php';
require_once 'assets/scripts/script-acilanDersler.php';
?>

</body>
</html>
