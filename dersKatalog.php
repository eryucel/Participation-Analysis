<?php
require_once 'libs/config.php';
$derslerO = new DersKatalog();
if(isset($_GET['page'])&&!empty($_GET['page']))
{
    $dersler = $derslerO->SelectList(0,'','',0,0,0,$_SESSION['profession'],($_GET['page']-1)*10,10);
}
else
{
    $dersler = $derslerO->SelectList(0,'','',0,0,0,$_SESSION['profession']);
    $_SESSION['derslerPagination']=count($dersler)%10==0?count($dersler)/10:count($dersler)/10+1;
    $dersler = $derslerO->SelectList(0,'','',0,0,0,$_SESSION['profession'],0,10);
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
            <a href="dersKatalogForm.php">Ders Ekle</a>
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Ders Adı</th>
                <th class="hide">Ders Kodu</th>
                <th class="hide">AKTS</th>
                <th class="hide">Öğrenci Sayısı</th>
                <th class="hide">Süre</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($dersler as $key){?>
                <tr>
                    <td>
                        <a href="#" class="title">
                            <?php echo $key['ders_adi']?>
                        </a>
                        <div class="magic-links">
                            <a href="dersKatalogForm.php?id=<?php echo $key['id']?>">Düzenle</a> | <a href="#" onclick="dersDelete(<?php echo $key['id']?>)" class="trash">Sil</a>
                        </div>
                    </td>
                    <td class="hide">
                        <a href="#">
                            <?php echo $key['ders_kodu']?>
                        </a>
                    </td>
                    <td class="hide">
                        <a href="#">
                            <?php echo $key['akts']?>
                        </a>
                    </td>
                    <td class="hide">
                        <a href="#">
                            <?php echo $key['ogrenci_sayisi']?>
                        </a>
                    </td>
                    <td class="hide">
                        <a href="#">
                            <?php echo $key['sure']?>
                        </a>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>

    <div class="pagination">
        <ul>
            <?php for ($i=1;$i<=$_SESSION['derslerPagination'];$i++){?>
            <li>
                <a href="dersKatalog.php?page=<?php echo $i?>">
                    <?php echo $i?>
                </a>
            </li>
            <?php }?>
        </ul>
    </div>
</div>

<?php
require_once 'assets/scripts/script-standard.php';
require_once 'assets/scripts/script-dersKatalog.php';
?>

</body>
</html>
