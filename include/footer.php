<?php
$lastSettings   = $database->getData("settings", 0); 
$lastLogo       = $database->getData("logo",1);
?>
<!-- Footer Area -->
<footer class="footer_area">
    <div class="container">
        <div class="footer_row row">
            <div class="col-md-6 col-sm-6 footer_about" style="display: flex;justify-content:center;align-items: center;flex-direction: column;">
                <h2>Şirketimiz Hakkında</h2>
                <img style="width: 117px; height: 22px; object-fit: cover;" src="images/logo/<?=$lastLogo[1]['logo_image']?>" alt="Logo Footer">
                <p><?= $lastSettings['settings_desc'] ?></p>
                <ul class="socail_icon">
                    <li>
                        <a href="<?= $lastSettings['settings_facebook'] ?>">
                            <i class="fab fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $lastSettings['settings_twitter'] ?>">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $lastSettings['settings_google'] ?>">
                            <i class="fab fa-google-plus" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $lastSettings['settings_linkedin'] ?>">
                            <i class="fab fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-6 footer_about" style="display: flex;justify-content:center;align-items: center;flex-direction: column;">
                <h2>İletişime Geçin</h2>
                <address>
                    <p>Sorularınız, yorumlarınız varsa veya sadece merhaba demek isterseniz:</p>
                    <ul class="my_address">
                        <li>
                            <a href="#">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <?=$lastSettings['settings_mail']?>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <?=$lastSettings['settings_phone']?>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-map-marker" aria-hidden="true"></i>
                                <?=$lastSettings['settings_address']?>
                            </a>
                        </li>
                    </ul>
                </address>
            </div>
        </div>
    </div>
    <div class="copyright_area">
        Copyright 2020 All rights reserved. Designed by <a href="https://colorlib.com">Colorlib.</a>
        | powered By <a href="https://harundogdu.com.tr">Harun Doğdu</a>
    </div>
</footer>
<!-- End Footer Area -->

<!-- jQuery JS -->
<script src="js/jquery-1.12.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Animate JS -->
<script src="vendors/animate/wow.min.js"></script>
<!-- Camera Slider -->
<script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
<script src="vendors/camera-slider/camera.min.js"></script>
<!-- Isotope JS -->
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope.pkgd.min.js"></script>
<!-- Progress JS -->
<script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
<script src="vendors/Counter-Up/waypoints.min.js"></script>
<!-- Owlcarousel JS -->
<script src="vendors/owl_carousel/owl.carousel.min.js"></script>
<!-- Stellar JS -->
<script src="vendors/stellar/jquery.stellar.js"></script>
<!-- Theme JS -->
<script src="js/theme.js"></script>
<!-- Sweet Alert Js -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- App JS -->
<script src="js/app.js"></script>
</body>

</html>