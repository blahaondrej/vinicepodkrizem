<?php
$title = "Vinice Pod křížem - Grüner Veltliner 2018";
?>

<?php require_once '../include/header.php' ?>
            <!--=============== wrapper ===============-->
            <div id="wrapper" class="heiginf">
                <!--Content -->
                <div class="content">
                    <!--  section  --> 
                    <section>
                        <div class="container big-container">
                            <!-- product container  -->
                            <div class="product-container fl-wrap">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="product-image fl-wrap">
                                            <div class="single-slider fl-wrap" data-effects="slide">
                                                <img src="<?php echo $url; ?>/images/vina/detail/veltlinske-zelene-2018.jpg" class="respimg" alt="Veltlínské zelené 2018">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="product-text fl-wrap">
                                            <h2>Grüner Veltliner 2018</h2>
                                            <h3>Kabinett / Trocken</h3>
                                            <div id="tabs-container">
                                                <div class="tab">
                                                    <div id="tab-1" class="tab-content">
                                                        <ul class="product-opt-list fl-wrap">
                                                            <li><span>Rebsorte: </span>Grüner Veltliner</li>
                                                            <li><span>Region/Gebiet: </span>Südmährische Region</li>
                                                            <li><span>Land: </span>Tschechische Republik</li>
                                                            <li><span>Geschmacksrichtung: </span>Trocken</li>
                                                            <li><span>Prädikat: </span>Kabinett</li>
                                                            <li><span>Farbe: </span>Weiß</li>
                                                            <li><span>Jahr: </span>2018</li>
                                                            <li><span>Menge: </span>0,75l</li>
                                                            <li><span>Verschlussart: </span>Naturkorken </li>
                                                        </ul>
                                                        <p>Grüner Veltliner ist eine alte Rebsorte, die zur Herstellung von Weißweinen bestimmt ist. Die autochthone Rebsorte mit Ursprung im niederösterreichischen Manhartsberg, wahrscheinlich aus der Umgebung der Stadt Retz, entstand durch die spontane Kreuzung der Rebsorten Traminer und Johanniskraut. Georgen.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quantity fl-wrap">
                                                <a href="<?php echo $urlde; ?>/kontakt" class="btn float-btn flat-btn">Kontakt</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product container end -->
                            <!-- products -->
                            <div class="products fl-wrap single-prd-list">
                                <h3>Weitere Weine</h3>
                                <?php require_once '../vina/items/hibernal-2017.php' ?>
                                <?php require_once '../vina/items/sauvignon-cabernet-klaret-2018.php' ?>
                                <?php require_once '../vina/items/ryzlink-rynsky-2017.php' ?>
                            </div>
                            <!-- products end -->
                        </div>
                    </section>
                    <!--  section  end--> 
                </div>
                <!-- content  end -->  
            </div>
            <!-- wrapper end -->
<?php require_once '../include/footer.php' ?>