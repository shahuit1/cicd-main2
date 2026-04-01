<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/icons/manifest.json">

    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome CSS 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css?v=1.1">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css?v=1.1">

    <!-- Lexend Deca Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belanosima:wght@400;600;700&display=swap" rel="stylesheet">

    <!--Intl Library CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.0.4/css/intlTelInput.css" integrity="sha512-OkSoWyaoScjXhOm87XO5hDz1E5buvm2aAkq+5zJmaYpylA0OKJ5no5qc4ZRrmApoaXEgXc3n0iyVS1q5FgiJjg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

</head>

<body>

    <!-- Header Start -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="logo-div">
                    <a class="navbar-brand" href="/"><img src="assets/images/logo.svg" alt="Business Logo Design" width="200px"></a>
                    <a class="navbar-brand" href="/"><img src="assets/images/logo-hvr.svg" width="200px" class="logo-img hd-hover-logo" alt="Business Logo Design"></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <span class="pet"><small><i class="fa fa-phone-square" aria-hidden="true"></i></small><a href="tel:9712574479">(971) 257-4479</a></span>
                        <li><a class="nav-link" href="about">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="logo-design">Logo Design</a></li>
                                <li><a class="nav-link" href="web-design-development">Website Development</a></li>
                                <li><a class="nav-link" href="e-commerce-solutions">Ecommerce Web Solutions</a></li>
                                <li><a class="nav-link" href="motion-graphics">Motion Graphics</a></li>
                                <li><a class="nav-link" href="app-design-and-development">App Design & Development</a></li>
                                <li><a class="nav-link" href="creative-copywrite">Creative Copywriting</a></li>
                                <li><a class="nav-link" href="digital-marketing">Digital Marketing</a></li>
                                <li><a class="nav-link" href="illustration-design">Illustration Design</a></li>
                                <li><a class="nav-link" href="marketing-collateral">Marketing Collateral</a></li>
                                <li><a class="nav-link" href="seo-services">SEO Services</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link" href="packages">Packages</a></li>
                        <li><a class="nav-link" href="combo-package">Combo Package</a></li>
                        <li><a class="nav-link" href="showcase">Showcase</a></li>
                        <li><a class="nav-link" href="testimonials">Testimonials</a></li>
                        <li><a class="nav-link" href="contact-us">Contact</a></li>
                    </div>
                </div>
                <button class="theme-btn-1">
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get a Free Quote</a>
                </button>
            </div>
        </nav>
    </header>
    <!-- Header End -->