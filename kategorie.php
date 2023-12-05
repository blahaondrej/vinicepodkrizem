<?php
$title = "Vinice Pod křížem - Vína";
?>

<?php require_once 'include/header.php' ?>
            <!--=============== wrapper ===============-->
            <div id="wrapper" class="heiginf">
                <!--Content -->
                <div class="content">
                    <section  class=" parallax-section" data-scrollax-parent="true">
                        <div class="bg"  data-bg="images/bg/vinice.jpg" data-scrollax="properties: { translateY: '250px' }" ></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="entry-header">
                                <h2>Nabídka vín</h2>
                                <span class="separator inline-sep sep-w"></span>
                            </div>
                        </div>
                    </section>
                    <!--  section  -->
                    <section>
                        <div class="container big-container">
                            <!-- products -->
                            <div class="products fl-wrap">
                                <?php require_once 'vina/items/hibernal-2017.php' ?>
                                <?php require_once 'vina/items/ryzlink-rynsky-2015.php' ?>
                                <?php require_once 'vina/items/ryzlink-rynsky-2016.php' ?>
                                <?php require_once 'vina/items/ryzlink-rynsky-2017.php' ?>
                                <?php require_once 'vina/items/ryzlink-vlassky-2017.php' ?>
                                <?php require_once 'vina/items/veltlinske-zelene-2017.php' ?>
                                <?php require_once 'vina/items/sauvignon-cabernet-klaret-2018.php' ?>
                                <?php require_once 'vina/items/sauvignon-cabernet-2018.php' ?>
                            </div>
                            <!-- products end -->
                        </div>
                    </section>
                    <!--  section end -->
                </div>
                <!-- content  end -->  
            </div>
            <!-- wrapper end -->
<?php require_once 'include/footer.php' ?>