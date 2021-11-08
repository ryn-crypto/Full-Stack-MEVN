<!DOCTYPE html>

    
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>GoodGames | Komunitas dan Jasa</title>

    <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
    <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
    <meta name="author" content="_nK">

    <link rel="icon" type="image/png" href="<?= base_url()?>assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url()?>assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <script defer src="<?= base_url()?>assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="<?= base_url()?>assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="<?= base_url()?>assets/vendor/ionicons/css/ionicons.min.css">

    <!-- Flickity -->
    <link rel="stylesheet" href="<?= base_url()?>assets/vendor/flickity/dist/flickity.min.css">

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/vendor/photoswipe/dist/default-skin/default-skin.css">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="<?= base_url()?>assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/vendor/summernote/dist/summernote-bs4.css">

    <!-- GoodGames -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/goodgames.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/custom.css">
    
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="<?= base_url()?>assets/vendor/jquery/dist/jquery.min.js"></script>
    
    
</head>

<body>

<header class="nk-header nk-header-opaque">

    
    
<!-- START: login -->
<div class="nk-contacts-top">
    <div class="container">
        <div class="nk-contacts-right">
            <ul class="nk-contacts-icons">
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalLogin">
                        Login <span class="fa fa-user"></span>
                    </a>
                </li>                
            </ul>
        </div>
    </div>
</div>
<!-- END: login -->

    

    <!--  START: Navbar    -->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">
                
                <a href="index.html" class="nk-nav-logo">
                    <img src="assets/images/logo.png" alt="GoodGames" width="199">
                </a>
                
                <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                    
                    <li class=" nk-drop-item">
                        <a href="#">Keunggulan</a>
                        <ul class="dropdown">        
                            <li> <a href="#">Transaksi Cepat</a></li>
                            <li> <a href="#">Mudah</a></li>
                            <li> <a href="#">Aman</a></li>
                        </ul>
                    </li>
                    <li class=" nk-drop-item">
                        <a href="#">Artikel</a>
                        <ul class="dropdown">
                            <li> <a href="#berita">Terbaru</a></li>
                            <li> <a href="#turnamen">Turnamen</a></li>
                        </ul>
                    </li>
                    <li><a href="#galery">Gallery</a></li>
                    <li class=" nk-drop-item"><a href="#">Toko</a>
                        <ul class="dropdown">            
                            <li><a href="store.html">Items</a></li>
                            <li><a href="store.html">Joki Akun</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nk-nav nk-nav-right nk-nav-icons">
                        <li class="single-icon d-lg-none">
                            <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->

</header>

    <!-- START: Navbar Mobile -->

<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="index.html" class="nk-nav-logo">
                <img src="assets/images/logo.png" alt="" width="120">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->