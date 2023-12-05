<?php
$title = "Vinice Pod křížem - Kontakt";
?>

<?php require_once 'include/header.php' ?>
            <!--=============== wrapper ===============-->
            <div id="wrapper" class="heiginf">
                <!--Content -->
                <div class="content">
                    <div class="fixed-column">
<!--                        <div class="bg bg-bottom"  data-bg="<?php /*echo $url; */?>/images/bg/hrozen.jpg"></div>
                        <div class="overlay"></div>
                        <div class="fixed-column-content-wrap">
                            <h2>Vinice <br> Pod křížem </h2>
                            <h4>Znojemská vinařská podoblast</h4>
                            <span class="separator inline-sep sep-w"></span>
                        </div>-->
                        <div  id="map-canvas"></div>
                    </div>
                    <div class="column-wrap">
                        <section class="big-pad-sec">
                            <div class="container">
                                <div class="section-title">
                                    <h3>Kontaktní informace</h3>
                                </div>
                                <div class="text-container fl-wrap">
                                    <p>Pokud jste si vybrali nějaká vína, neváhejte se nám ozvat na níže uvedených kontaktech a domluvíme se na osobním předání.</p>
                                    <div class="contact-details fl-wrap">
                                        <ul>
                                            <li><span>Email:</span><a href="mailto:info@vinicepodkrizem.cz" target="_blank">info@vinicepodkrizem.cz</a></li>
                                            <li><span>Telefon:</span><a href="tel:731428734">+420 731 428 734</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
<!--                        <section>
                            <div class="container">
                                <div class="map-box">
                                    <div  id="map-canvas"></div>
                                </div>
                            </div>
                        </section>-->
                        <section>
                            <div class="container">
                                <div class="section-title">
                                    <h3>Napište nám</h3>
                                </div>
                                <div class="text-container fl-wrap">
                                    <!-- contact form -->
                                    <div class="contact-form-holder fl-wrap">
                                        <div id="contact-form">
                                            <div id="message"></div>
                                            <form method="post" action="php/contact.php" name="contactform" id="contactform">
                                                <input name="name" type="text" id="name"  onClick="this.select()" placeholder="Jméno">
                                                <input name="email" type="text" id="email" onClick="this.select()" placeholder="Email" >
												<input type="text"  name="phone" id="phone" onClick="this.select()" placeholder="Telefon" />
                                                <textarea name="comments"  id="comments" onClick="this.select()" placeholder="Zpráva"></textarea>
<!--                                                    <div class="verify-wrap">
                                                        <span class="verify-text"> How many gnomes were in the story about the "Snow-white" ?</span> 
                                                        <input name="verify" type="text" id="verify" onClick="this.select()" value="0" >
                                                    </div>-->
                                                <button type="submit"  id="submit"  data-top-bottom="transform: translateY(-50px);" data-bottom-top="transform: translateY(50px);"><span>Odeslat zprávu</span></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- contact form  end--> 
                                </div>
                            </div>
                        </section>
                    </div>
                    <!--column wrap -->                     
                </div>
                <!-- content  end -->  
            </div>
            <!-- wrapper end -->
<?php require_once 'include/footer.php' ?>