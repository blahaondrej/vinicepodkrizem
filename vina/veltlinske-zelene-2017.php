<?php
$title = "Vinice Pod křížem - Veltlínské zelené 2017";
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
                                                <img src="<?php echo $url; ?>/images/vina/detail/veltlinske-zelene-2017.jpg" class="respimg" alt="Veltlínské zelené 2017">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="product-text fl-wrap">
                                            <h2>Veltlínské zelené 2017</h2>
                                            <h3>Kabinet / Suché</h3>
                                            <div class="pr-opt fl-wrap">
                                                <div class="product-item-price">110 Kč</div>
                                            </div>
                                            <div id="tabs-container">
                                                <div class="tab">
                                                    <div id="tab-1" class="tab-content">
                                                        <ul class="product-opt-list fl-wrap">
                                                            <li><span>Odrůda: </span>Veltlínské zelené</li>
                                                            <li><span>Kategorie: </span>Suché</li>
                                                            <li><span>Přívlastek: </span>Kabinetní víno</li>
                                                            <li><span>Barva: </span>Bílé víno</li>
                                                            <li><span>Ročník: </span>2017</li>
                                                            <li><span>Obsah: </span>0,75l</li>
                                                        </ul>
                                                        <p>Veltlínské zelené je stará odrůda révy vinné, určená k výrobě bílých vín. Autochtonní odrůda, pocházející z regionu Dolní Rakousko, z oblasti vrchoviny Manhartsberg, patrně z okolí města Retz, vznikla samovolným křížením odrůd Tramín a St. Georgen.</p>
                                                        <p>Nejméně sladká vína s maximálním obsahem 4 gramy zbytkového cukru na litr. Tato vína se proto vyznačují kyselejší, říznou chutí a zvláště jako bílá vína výborně osvěží.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quantity fl-wrap">
                                                <a href="<?php echo $url; ?>/kontakt.php" class="btn float-btn flat-btn">Kontakt</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product container end -->
                            <!-- products -->
                            <div class="products fl-wrap single-prd-list">
                                <h3>Další vína</h3>
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