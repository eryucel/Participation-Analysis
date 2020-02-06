<div class="sidebar">

    <ul>
        <li>
            <a href="derslere-gore-analiz.php">
                <span class="fa fa-area-chart"></span>
                <span class="title">
Derslere Göre Analiz
                </span>
            </a>
        </li>
        <li>
            <a href="ogretim-uyelerine-gore-analiz.php">
                <span class="fa fa-area-chart"></span>
                <span class="title">
Öğretim Ü. Göre Analiz
                </span>
            </a>
        </li>
        <li>
            <a href="saatlere-gore-analiz.php">
                <span class="fa fa-area-chart"></span>
                <span class="title">
Saatlere Göre Analiz
                </span>
            </a>
        </li>
      <!--  <li>
            <a href="nodemcular.php">
                <span class="fa fa-wifi"></span>
                <span class="title">
Nodemcu Ekle
                </span>
            </a>
        </li>-->
        <li>
            <a href="dersKatalog.php">
                <span class="fa fa-plus"></span>
                <span class="title">
Ders Katalog
                </span>
            </a>
        </li>
        <li>
            <a href="acilanDersler.php">
                <span class="fa fa-plus"></span>
                <span class="title">
Açılan Dersler
                </span>
            </a>
        </li>
        <li>
            <a href="derslikler.php">
                <span class="fa fa-plus"></span>
                <span class="title">
Sınıf Ekle
                </span>
            </a>
        </li>
        <li>
            <a href="ogretimUyeleri.php">
                <span class="fa fa-plus"></span>
                <span class="title">
Öğretim Üyeleri
                </span>
            </a>
        </li> 
        <li>
            <a href="#">
                <span class="fa fa-book"></span>
                <span class="title">
                    <?php echo $_SESSION['profession_name']; ?>
                </span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-user"></span>
                <span class="title">
                    <?php echo $_SESSION['name'].' '.$_SESSION['surname']; ?>
                </span>
            </a>
        </li>
       
        <li id='logout_li'>
            <a href="">
                <span class="fa fa-close"></span>
                <span class="title">
Çıkış Yap
                </span>
            </a>
        </li>
    </ul>
    <a href="#" class="collapse-menu">
        <span class="fa fa-arrow-circle-left"></span>
        <span class="title">
Menüyü Daralt
</span>
    </a>

</div>