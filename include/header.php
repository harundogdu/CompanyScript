<?php
$lastSettings   = $database->getData("settings");
$lastLogo       = $database->getData("logo",1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?=$lastSettings['settings_base']?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keyword" content="<?=$lastSettings['settings_keyw']?>">
    <meta name="description" content="<?=$lastSettings['settings_desc']?>">
    <title><?=$lastSettings['settings_title']?></title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <!-- Camera Slider -->
    <link rel="stylesheet" href="vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
    <link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">

    <!--Theme Styles CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader"></div>

<!-- Top Header_Area -->
<section class="top_header_area">
    <div class="container">
        <ul class="nav navbar-nav top_nav">
            <li><a href="tel:<?=$lastSettings['settings_phone']?>"><i class="fas fa-phone"></i><?=$lastSettings['settings_phone']?></a></li>
            <li><a href="mailto:<?=$lastSettings['settings_mail']?>"><i class="fas fa-envelope"></i><?=$lastSettings['settings_mail']?></a></li>
            <li><a href="#"><i class="fas fa-clock"></i><?=$lastSettings['settings_work']?></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right social_nav">
            <li><a href="<?=$lastSettings['settings_facebook']?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="<?=$lastSettings['settings_twitter']?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="<?=$lastSettings['settings_google']?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <li><a href="<?=$lastSettings['settings_instagram']?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="<?=$lastSettings['settings_pinterest']?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
            <li><a href="<?=$lastSettings['settings_linkedin']?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</section>
<!-- End Top Header_Area -->

<!-- Header_Area -->
<nav class="navbar navbar-default header_aera" id="main_navbar">
    <div class="container">       
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="col-md-2 p0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="homepage.html"><img src="images/logo/<?=$lastLogo[0]['logo_image']?>" alt="Logo Header"></a>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="col-md-10 p0">
            <div class="collapse navbar-collapse" id="min_navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="homepage.html">Anasayfa</a></li>
                    <li><a href="about.html">Hakkımızda</a></li>
                    <li><a href="services.html">Hizmetler</a></li>
                    <li><a href="contact.html">İletişim</a></li>                  
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container -->
</nav>
<!-- End Header_Area -->
