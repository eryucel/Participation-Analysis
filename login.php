<?php require_once 'libs/config.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once 'assets/styles/style-standard.php'; ?>
    <?php require_once 'assets/styles/style-login.php'; ?>
</head>
<body>

<div class="login">
    <h1>Giriş</h1>
    <form method="post" id="loginForm">
        <input type="email" name="email" placeholder="E-mail" required="required" />
        <input type="password" name="password" placeholder="Şifre" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Giriş Yap</button>
    </form>
</div>

<?php
require_once 'assets/scripts/script-standard.php';
require_once 'assets/scripts/script-login.php';
?>

</body>
</html>

