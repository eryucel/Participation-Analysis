<?php
require_once 'libs/config.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <?php require_once 'assets/styles/style-standard.php'; ?>

</head>
<body>
<?php
require_once 'includes/navbar.php';
require_once 'includes/sidebar.php';
?>
<div class="container-fluid">
    <div id="dersEtkilesimSayisiGrafik" class="row"  style="height: 370px; overflow-y: auto; overflow-x: auto;"></div>
    <br>
    <div id="dersEtkilesimOraniGrafik" class="row"  style="height: 370px; overflow-y: auto; overflow-x: auto;"></div>
</div>
<?php require_once 'assets/scripts/script-standard.php'; ?>
<?php require_once 'assets/scripts/script-ouga-chart.php'; ?>
</body>
</html>