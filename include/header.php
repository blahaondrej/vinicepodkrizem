<?php require_once "header-base.php"; ?>
<!-- loader -->
<div class="spinner">
    <div class="double-bounce1"></div>
    <div class="double-bounce2"></div>
</div>
<!-- loader end -->
<!--================= Main   ================-->
<div id="main">
    <!--================= header ================-->
    <header class="main-header">
        <div class="header-contacts">
            <ul>
                <li class="language-switch"><span>Jazyk :</span><a href="https://www.vinicepodkrizem.cz/de/"><strong>Deutsch</strong></a></li>
                <li class="hidden-tablet"><a href="tel:731428734"><span>Telefon :</span> +420 731 428 734</a></li>
                <li class="hidden-tablet"><a href="mailto:info@vinicepodkrizem.cz"> <span>Email :</span> info@vinicepodkrizem.cz</a></li>
            </ul>
        </div>
        <a class="logo-holder" href="<?php echo $url; ?>"><img src="<?php echo $url; ?>/images/logo.svg" alt="Vinice Pod křížem"></a>
        <!-- search button-->
        <div class="show-sibedar vissidebar"></div>
        <!-- search button end -->
        <!-- sidebar-button -->
        <div class="sidebar-button-wrap vis-m"></div>
        <!-- sidebar-button end-->
        <!-- mobile nav -->
        <div class="nav-button-wrap">
            <div class="nav-button vis-main-menu"><span></span><span></span><span></span></div>
        </div>
        <!-- mobile nav end-->
        <!--  navigation -->
        <div class="nav-holder">
            <nav>
                <ul>
                    <li>
                        <a href="<?php echo $url; ?>">Úvod</a>
                    </li>
                    <li>
                        <a href="<?php echo $url; ?>/o-nas.php">O nás</a>
                    </li>
                    <li>
                        <a href="<?php echo $url; ?>/kategorie.php">Vína</a>
                        <!--second level end-->
                        <ul>
                            <li><a href="<?php echo $url; ?>/vina/hibernal-2017.php">Hibernal 2017</a></li>
                            <li><a href="<?php echo $url; ?>/vina/ryzlink-rynsky-2015.php">Ryzlink rýnský 2015</a></li>
                            <li><a href="<?php echo $url; ?>/vina/ryzlink-rynsky-2016.php">Ryzlink rýnský 2016</a></li>
                            <li><a href="<?php echo $url; ?>/vina/ryzlink-rynsky-2017.php">Ryzlink rýnský 2017</a></li>
                            <li><a href="<?php echo $url; ?>/vina/ryzlink-vlassky-2017.php">Ryzlink vlašský 2017</a></li>
                            <li><a href="<?php echo $url; ?>/vina/veltlinske-zelene-2017.php">Veltlínské zelené 2017</a></li>
                            <li><a href="<?php echo $url; ?>/vina/sauvignon-cabernet-klaret-2018.php">Sauvignon Cabernet klaret 2018</a></li>
                            <li><a href="<?php echo $url; ?>/vina/sauvignon-cabernet-2018.php">Sauvignon Cabernet 2018</a></li>
                        </ul>
                        <!--second level end-->
                    </li>
                    <li>
                        <a href="<?php echo $url; ?>/oceneni.php">Výstavy</a>
                    </li>
<!--                    <li>
                        <a href="<?php /*echo $url; */?>/galerie">Galerie</a>
                    </li>-->
                    <li>
                        <a href="<?php echo $url; ?>/kontakt.php">Kontakt</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- navigation  end -->
    </header>
    <!-- header  end -->