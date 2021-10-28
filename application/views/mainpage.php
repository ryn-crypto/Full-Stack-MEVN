<!DOCTYPE html>

    
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>GoodGames | Community and Store HTML Game Template</title>

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


<div class="nk-main">    
    <div class="nk-gap-2"></div>
    <div class="container">

    <!-- START: Image Slider -->
    <div class="nk-image-slider" data-autoplay="8000">

        <div class="nk-image-slider-item">
            <img src="<?= base_url()?>/assets/images/slide-1.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-1-thumb.jpg">
            <div class="nk-image-slider-content">
                <h3 class="h4">Saat kami Melewati, saya berkomentar</h3>
                <p class="text-white">Saat kami lewat, saya melihat menara gereja yang indah menjulang di atas beberapa pohon elm tua di taman; dan di depan mereka, di tengah-tengah halaman, cerobong asap yang ditutupi tanaman ivy, dan jendela-jendelanya bersinar di bawah sinar matahari.</p>
                <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>
            </div>
        </div>
        
        <div class="nk-image-slider-item">
            <img src="<?= base_url()?>assets/images/slide-2.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-2-thumb.jpg">
            <div class="nk-image-slider-content">
                <h3 class="h4">Dia menjadikan kapten dari salah satu penumpangnya</h3>
                <p class="text-white">Sekarang ras dari kedua ras ini telah punah selama beberapa zaman, dan selain membicarakan lebih jauh tentang mereka sama sekali tidak sesuai dengan tujuan saya. Tetapi perhatian yang paling saya miliki adalah untuk Korporasi Penyair kami, dari siapa saya menyiapkan petisi kepada Yang Mulia, untuk berlangganan dengan nama salah satu ...</p>
                <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>
            </div>
        </div>
        
        <div class="nk-image-slider-item">
            <img src="<?= base_url()?>assets/images/slide-3.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-3-thumb.jpg">
        </div>
        
        <div class="nk-image-slider-item">
            <img src="<?= base_url()?>assets/images/slide-4.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-4-thumb.jpg">
            <div class="nk-image-slider-content">
                <h3 class="h4">Akhirnya salah satu dari mereka memanggil dengan jelas</h3>
                <p class="text-white">Saat itu kepalanya membentur atap aula: sebenarnya dia sekarang tingginya lebih dari sembilan kaki ...</p>
                <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>
            </div>
        </div>
        
        <div class="nk-image-slider-item">
            <img src="<?= base_url()?>assets/images/slide-5.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-5-thumb.jpg">
            <div class="nk-image-slider-content">
                    <h3 class="h4">Untuk kebaikan, Juga pola fikirnya, sebagai konsekuensinya</h3>
                    <p class="text-white">Dia memberi ibuku giliran sedemikian rupa, sehingga aku selalu yakin bahwa aku berhutang budi kepada Miss Betsey karena lahir pada hari Jumat. Kata itu cocok untuk saat ini.</p>
                    <p class="text-white">Ibuku jauh lebih buruk sehingga Peggotty, masuk dengan papan teh dan lilin, dan melihat sekilas betapa sakitnya dia, - seperti yang mungkin dilakukan Miss Betsey lebih cepat jika ada cukup cahaya, - membawanya ke atas ke kamarnya sendiri. dengan semua kecepatan; dan segera mengirim Ham Peggotty, keponakannya, yang selama beberapa hari terakhir disembunyikan di rumah...</p>
                    <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>
            </div>
        </div>
    </div>
    <!-- END: Image Slider -->

    <!-- START: Categories -->
    <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="assets/images/icon-mouse.png" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="#">PC</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="#">View Games</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="assets/images/icon-gamepad.png" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="#">PS4</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="#">View Games</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="assets/images/icon-gamepad-2.png" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="#">Xbox</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="#">View Games</a></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Categories -->

    <!-- START: Latest News -->
    <div class="nk-gap-2" id="berita"></div>
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Berita</span> Terbaru</span></h3>
    <div class="nk-gap"></div>

    <div class="nk-news-box">
        <div class="nk-news-box-list">
            <div class="nano">
                <div class="nano-content">
                    
                    
                    <div class="nk-news-box-item nk-news-box-item-active">
                        <div class="nk-news-box-item-img">
                            <img src="assets/images/post-1-sm.jpg" alt="Smell magic in the air. Or maybe barbecue">
                        </div>
                        <img src="assets/images/post-1.jpg" alt="Smell magic in the air. Or maybe barbecue" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">Smell magic in the air. Or maybe barbecue</h3>
                        
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-4">MMO</span>
                        </span>
                        
                        <div class="nk-news-box-item-text">
                            <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>
                        </div>
                        <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Sep 18, 2018</div>
                    </div>
                    
                    
                    <div class="nk-news-box-item">
                        <div class="nk-news-box-item-img">
                            <img src="assets/images/post-2-sm.jpg" alt="Grab your sword and fight the Horde">
                        </div>
                        <img src="assets/images/post-2.jpg" alt="Grab your sword and fight the Horde" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">Grab your sword and fight the Horde</h3>
                        
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-1">Action</span>
                        </span>
                        
                        <div class="nk-news-box-item-text">
                            <p>For good, too; though, in consequence of my previous emotions, I was still occasionally seized with a stormy sob . After we had jogged on for some little time, I asked the carrier...</p>
                        </div>
                        <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Sep 5, 2018</div>
                    </div>
                    
                    
                    <div class="nk-news-box-item">
                        <div class="nk-news-box-item-img">
                            <img src="assets/images/post-3-sm.jpg" alt="We found a witch! May we burn her?">
                        </div>
                        <img src="assets/images/post-3.jpg" alt="We found a witch! May we burn her?" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">We found a witch! May we burn her?</h3>
                        
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-2">Adventure</span>
                        </span>
                        
                        <div class="nk-news-box-item-text">
                            <p>And she went on planning to herself how she would manage it. `They must go by the carrier,' she thought; `and how funny it'll seem, sending presents to one's own feet!...</p>
                        </div>
                        <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Aug 27, 2018</div>
                    </div>
                    
                    
                    <div class="nk-news-box-item">
                        <div class="nk-news-box-item-img">
                            <img src="assets/images/post-4-sm.jpg" alt="For good, too though, in consequence">
                        </div>
                        <img src="assets/images/post-4.jpg" alt="For good, too though, in consequence" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">For good, too though, in consequence</h3>
                        
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-3">Strategy</span>
                        </span>
                        
                        <div class="nk-news-box-item-text">
                            <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                        </div>
                        <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Aug 14, 2018</div>
                    </div>
                    
                    
                    <div class="nk-news-box-item">
                        <div class="nk-news-box-item-img">
                            <img src="assets/images/post-5-sm.jpg" alt="He made his passenger captain of one">
                        </div>
                        <img src="assets/images/post-5.jpg" alt="He made his passenger captain of one" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">He made his passenger captain of one</h3>
                        
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-5">Indie</span>
                        </span>
                        
                        <div class="nk-news-box-item-text">
                            <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                        </div>
                        <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Jul 23, 2018</div>
                    </div>
                    
                    
                    <div class="nk-news-box-item">
                        <div class="nk-news-box-item-img">
                            <img src="assets/images/post-6-sm.jpg" alt="At first, for some time, I was not able to answer">
                        </div>
                        <img src="assets/images/post-6.jpg" alt="At first, for some time, I was not able to answer" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">At first, for some time, I was not able to answer</h3>
                        
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-5">Racing</span>
                        </span>
                        
                        <div class="nk-news-box-item-text">
                            <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                        </div>
                        <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Jul 3, 2018</div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="nk-news-box-each-info">
            <div class="nano">
                <div class="nano-content">
                    <!-- There will be inserted info about selected news-->
                    <div class="nk-news-box-item-image">
                        <img src="assets/images/post-1.jpg" alt="">
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-4">MMO</span>
                        </span>
                    </div>
                    <h3 class="nk-news-box-item-title">Smell magic in the air. Or maybe barbecue</h3>
                    <div class="nk-news-box-item-text">
                        <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>
                    </div>
                    <a href="blog-article.html" class="nk-news-box-item-more">Read More</a>
                    <div class="nk-news-box-item-date">
                        <span class="fa fa-calendar"></span> Sep 18, 2018
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="nk-gap-2"></div>
    <div class="nk-blog-grid">
        <div class="row">
            
            
            <div class="col-md-6 col-lg-3">
                <!-- START: Post -->
                <div class="nk-blog-post">
                    <a href="blog-article.html" class="nk-post-img">
                        <img src="assets/images/post-5-mid.jpg" alt="He made his passenger captain of one">
                        <span class="nk-post-comments-count">13</span>
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-5">Indie</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="blog-article.html">He made his passenger captain of one</a></h2>
                    <div class="nk-post-text">
                        <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                    </div>
                    <div class="nk-gap"></div>
                    <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 23, 2018</div>
                </div>
                <!-- END: Post -->
            </div>
            
            
            <div class="col-md-6 col-lg-3">
                <!-- START: Post -->
                <div class="nk-blog-post">
                    <a href="blog-article.html" class="nk-post-img">
                        <img src="assets/images/post-6-mid.jpg" alt="At first, for some time, I was not able to answer">
                        <span class="nk-post-comments-count">0</span>
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-5">Racing</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="blog-article.html">At first, for some time, I was not able to answer</a></h2>
                    <div class="nk-post-text">
                        <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                    </div>
                    <div class="nk-gap"></div>
                    <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 3, 2018</div>
                </div>
                <!-- END: Post -->
            </div>
            
            
            <div class="col-md-6 col-lg-3">
                <!-- START: Post -->
                <div class="nk-blog-post">
                    <a href="blog-article.html" class="nk-post-img">
                        <img src="assets/images/post-7-mid.jpg" alt="At length one of them called out in a clear">
                        <span class="nk-post-comments-count">0</span>
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-6">MOBA</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="blog-article.html">At length one of them called out in a clear</a></h2>
                    <div class="nk-post-text">
                        <p>TJust then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                    </div>
                    <div class="nk-gap"></div>
                    <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 3, 2018</div>
                </div>
                <!-- END: Post -->
            </div>
            
            
            <div class="col-md-6 col-lg-3">
                <!-- START: Post -->
                <div class="nk-blog-post">
                    <a href="blog-article.html" class="nk-post-img">
                        <img src="assets/images/post-8-mid.jpg" alt="For good, too though, in consequence">
                        <span class="nk-post-comments-count">0</span>
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-2">Adventure</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="blog-article.html">For good, too though, in consequence</a></h2>
                    <div class="nk-post-text">
                        <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                    </div>
                    <div class="nk-gap"></div>
                    <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 3, 2018</div>
                </div>
                <!-- END: Post -->
            </div>
            
        </div>
    </div>
    <!-- END: Latest News -->

    <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-lg-8">

            <!-- START: Latest Posts -->
            <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Latest</span> Posts</span></h3>
            <div class="nk-gap"></div>
            <div class="nk-blog-grid">
                <div class="row">
                    
                    
                    <div class="col-md-6">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="blog-article.html" class="nk-post-img">
                                <img src="assets/images/post-5-mid.jpg" alt="He made his passenger captain of one">
                                <span class="nk-post-comments-count">13</span>
                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="blog-article.html">He made his passenger captain of one</a></h2>
                            <div class="nk-post-by">
                                <img src="assets/images/avatar-3.jpg" alt="Wolfenstein" class="rounded-circle" width="35"> by <a href="#">Wolfenstein</a> in Jul 23, 2018
                            </div>
                            <div class="nk-gap"></div>
                            <div class="nk-post-text">
                                <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                        </div>
                        <!-- END: Post -->
                    </div>
                    
                    
                    <div class="col-md-6">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="blog-article.html" class="nk-post-img">
                                <img src="assets/images/post-6-mid.jpg" alt="At first, for some time, I was not able to answer">
                                <span class="nk-post-comments-count">0</span>
                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="blog-article.html">At first, for some time, I was not able to answer</a></h2>
                            <div class="nk-post-by">
                                <img src="assets/images/avatar-3.jpg" alt="Wolfenstein" class="rounded-circle" width="35"> by <a href="#">Wolfenstein</a> in Jul 3, 2018
                            </div>
                            <div class="nk-gap"></div>
                            <div class="nk-post-text">
                                <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                        </div>
                        <!-- END: Post -->
                    </div>
                    
                </div>
            </div>
            <!-- END: Latest Posts -->

            <!-- START: Latest Matches -->
            <div class="nk-gap-2" id="turnamen"></div>
            <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Pertandingan</span> terakhir</span></h3>
            <div class="nk-gap"></div>
            <div class="row">
                <div class="col-md-8">
                    <div class="nk-match-score bg-dark-3">Now Playing</div>
                    <div class="nk-gap-2"></div>
                    <div class="nk-widget-match p-0">
                        <div class="nk-widget-match-teams">
                            <div class="nk-widget-match-team-logo">
                                <img src="assets/images/team-1.jpg" alt="">
                            </div>
                            <div class="nk-widget-match-vs">VS</div>
                            <div class="nk-widget-match-team-logo">
                                <img src="assets/images/team-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="nk-gap-2"></div>
                    <p>As she said this she looked down at her hands and was surprised to see.</p>
                    <a class="nk-btn nk-btn-rounded nk-btn-color-main-1">Match Details</a>
                </div>
            </div>
            <div class="nk-gap"></div>
            <div class="nk-match">
                <div class="nk-match-team-left">
                    <a href="#">
                        <span class="nk-match-team-logo">
                            <img src="assets/images/team-1.jpg" alt="">
                        </span>
                        <span class="nk-match-team-name">SK Telecom T1</span>
                    </a>
                </div>
                <div class="nk-match-status">
                    <a href="#">
                        <span class="nk-match-status-vs">VS</span>
                        <span class="nk-match-status-date">Apr 28, 2018 8:00 pm</span>
                        <span class="nk-match-score bg-danger">
                            2 : 17
                        </span>
                    </a>
                </div>
                <div class="nk-match-team-right">
                    <a href="#">
                        <span class="nk-match-team-name">
                            Cloud 9
                        </span>
                        <span class="nk-match-team-logo">
                            <img src="assets/images/team-2.jpg" alt="">
                        </span>
                    </a>
                </div>
            </div>

            <div class="nk-match">
                <div class="nk-match-team-left">
                    <a href="#">
                        <span class="nk-match-team-logo">
                            <img src="assets/images/team-3.jpg" alt="">
                        </span>
                        <span class="nk-match-team-name">Counted logic gaming</span>
                    </a>
                </div>
                <div class="nk-match-status">
                    <a href="#">
                        <span class="nk-match-status-vs">VS</span>
                        <span class="nk-match-status-date">Apr 15, 2018 9:00 pm</span>
                        <span class="nk-match-score bg-success">28 : 19</span>
                    </a>
                </div>
                <div class="nk-match-team-right">
                    <a href="#">
                        <span class="nk-match-team-name">SK Telecom T1</span>
                        <span class="nk-match-team-logo">
                            <img src="assets/images/team-1.jpg" alt="">
                        </span>
                    </a>
                </div>
            </div>

            <div class="nk-match">
                <div class="nk-match-team-left">
                    <a href="#">
                        <span class="nk-match-team-logo">
                            <img src="assets/images/team-4.jpg" alt="">
                        </span>
                        <span class="nk-match-team-name">Team SoloMid</span>
                    </a>
                </div>
                <div class="nk-match-status">
                    <a href="#">
                        <span class="nk-match-status-vs">VS</span>
                        <span class="nk-match-status-date">Apr 28, 2018 8:00 pm</span>
                        <span class="nk-match-score bg-dark-1">13 : 13</span>
                    </a>
                </div>
                <div class="nk-match-team-right">
                    <a href="#">
                        <span class="nk-match-team-name">SK Telecom T1</span>
                        <span class="nk-match-team-logo">
                            <img src="assets/images/team-1.jpg" alt="">
                        </span>
                    </a>
                </div>
            </div>
            <!-- END: Latest Matches -->

            <!-- START: Latest Pictures -->
            <div class="nk-gap" id="galery"></div>
            <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Gallery</span> terbaru</span></h2>
            <div class="nk-gap"></div>
            <div class="nk-popup-gallery">
                <div class="row vertical-gap">
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="assets/images/gallery-1.jpg" class="nk-gallery-item" data-size="1016x572">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="assets/images/gallery-1-thumb.jpg" alt="">
                            </a>
                            <div class="nk-gallery-item-description">
                                <h4>Called Let</h4>
                                Divided thing, land it evening earth winged whose great after. Were grass night. To Air itself saw bring fly fowl. Fly years behold spirit day greater of wherein winged and form. Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="assets/images/gallery-2.jpg" class="nk-gallery-item" data-size="1188x594">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="assets/images/gallery-2-thumb.jpg" alt="">
                            </a>
                            <div class="nk-gallery-item-description">
                                Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="assets/images/gallery-3.jpg" class="nk-gallery-item" data-size="625x350">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="assets/images/gallery-3-thumb.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="assets/images/gallery-4.jpg" class="nk-gallery-item" data-size="873x567">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="assets/images/gallery-4-thumb.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="assets/images/gallery-5.jpg" class="nk-gallery-item" data-size="471x269">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="assets/images/gallery-5-thumb.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="assets/images/gallery-6.jpg" class="nk-gallery-item" data-size="472x438">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="assets/images/gallery-6-thumb.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Latest Pictures -->

        </div>
        <div class="col-lg-4">
            
        <!-- START: Sidebar -->
            <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                <div class="nk-widget">
                    <div class="nk-widget-content">
                    </div>
                </div>
                <div class="nk-widget nk-widget-highlighted">
                    <h4 class="nk-widget-title"><span><span class="text-main-1">We</span> Are Social</span></h4>
                    <div class="nk-widget-content">

                    <!-- Social Links 3 -->
                    
                    <ul class="nk-social-links-3 nk-social-links-cols-4">
                        <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                        <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                        <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                        <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                        <li><a class="nk-social-twitter" href="#" target="_blank"><span class="fab fa-twitter"></span></a></li>
                        <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                    </ul>
                </div>
    
                <div class="nk-widget nk-widget-highlighted mt-5">
                    <h4 class="nk-widget-title"><span><span class="text-main-1">Next</span> Matches</span></h4>
                    <div class="nk-widget-content">
                        <div class="nk-widget-match">
                            <a href="#">
                                <span class="nk-widget-match-left">
                                    <span class="nk-widget-match-teams">
                                        <span class="nk-widget-match-team-logo">
                                            <img src="assets/images/team-1.jpg" alt="">
                                        </span>
                                        <span class="nk-widget-match-vs">VS</span>
                                        <span class="nk-widget-match-team-logo">
                                            <img src="assets/images/team-2.jpg" alt="">
                                        </span>
                                    </span>
                                    <span class="nk-widget-match-date">CS:GO - Apr 28, 2018 8:00 pm</span>
                                </span>
                                <span class="nk-widget-match-right">
                                    <span class="nk-match-score">
                                        Upcoming
                                    </span>
                                </span>
                            </a>
                        </div>

                    <div class="nk-widget-match">
                        <a href="#">
                            <span class="nk-widget-match-left">
                                <span class="nk-widget-match-teams">
                                    <span class="nk-widget-match-team-logo">
                                        <img src="assets/images/team-3.jpg" alt="">
                                    </span>
                                    <span class="nk-widget-match-vs">VS</span>
                                    <span class="nk-widget-match-team-logo">
                                        <img src="assets/images/team-2.jpg" alt="">
                                    </span>
                                </span>
                                <span class="nk-widget-match-date">LoL - Apr 24, 2018 7:20 pm</span>
                            </span>
                            <span class="nk-widget-match-right">
                                <span class="nk-match-score">
                                    Upcoming
                                </span>
                            </span>
                        </a>
                    </div>

                    <div class="nk-widget-match">
                        <a href="#">
                            <span class="nk-widget-match-left">
                                <span class="nk-widget-match-teams">
                                    <span class="nk-widget-match-team-logo">
                                        <img src="assets/images/team-1.jpg" alt="">
                                    </span>
                                    <span class="nk-widget-match-vs">VS</span>
                                    <span class="nk-widget-match-team-logo">
                                        <img src="assets/images/team-4.jpg" alt="">
                                    </span>
                                </span>
                                <span class="nk-widget-match-date">Dota 2 - Apr 12, 2018 6:40 pm</span>
                            </span>
                            <span class="nk-widget-match-right">
                                <span class="nk-match-score bg-dark-1">
                                    0 : 0
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </aside>
            <!-- END: Sidebar -->
        </div>
    </div>
</div>

<div class="nk-gap-4"></div>


        
            <!-- START: Footer -->
<footer class="nk-footer">

    <div class="container">
        <div class="nk-gap-3"></div>
        <div class="row vertical-gap">
            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Contact</span> With Us</h4>
                    <div class="nk-widget-content">
                        <form action="php/ajax-contact-form.php" class="nk-form nk-form-ajax">
                            <div class="row vertical-gap sm-gap">
                                <div class="col-md-6">
                                    <input type="email" class="form-control required" name="email" placeholder="Email *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control required" name="name" placeholder="Name *">
                                </div>
                            </div>
                            <div class="nk-gap"></div>
                            <textarea class="form-control required" name="message" rows="5" placeholder="Message *"></textarea>
                            <div class="nk-gap-1"></div>
                            <button class="nk-btn nk-btn-rounded nk-btn-color-white">
                                <span>Send</span>
                                <span class="icon"><i class="icon-paper-airplane"></i></span>
                            </button>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Latest</span> Posts</h4>
                    <div class="nk-widget-content">
                        <div class="row vertical-gap sm-gap">
                            
                            <div class="col-lg-6">
                                <div class="nk-widget-post-2">
                                    <a href="blog-article.html" class="nk-post-image">
                                        <img src="assets/images/post-1-sm.jpg" alt="">
                                    </a>
                                    <div class="nk-post-title"><a href="blog-article.html">Smell magic in the air. Or maybe barbecue</a></div>
                                    <div class="nk-post-date">
                                        <span class="fa fa-calendar"></span> Sep 18, 2018
                                        <span class="fa fa-comments"></span> <a href="#">4</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="nk-widget-post-2">
                                    <a href="blog-article.html" class="nk-post-image">
                                        <img src="assets/images/post-2-sm.jpg" alt="">
                                    </a>
                                    <div class="nk-post-title"><a href="blog-article.html">Grab your sword and fight the Horde</a></div>
                                    <div class="nk-post-date">
                                        <span class="fa fa-calendar"></span> Sep 5, 2018
                                        <span class="fa fa-comments"></span> <a href="#">7</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">In</span> Twitter</h4>
                    <div class="nk-widget-content">
                        <div class="nk-twitter-list" data-twitter-count="1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-3"></div>
    </div>
</footer>
<!-- END: Footer -->

        
    </div>
        <!-- START: Page Background -->

    <img class="nk-page-background-top" src="<?= base_url()?>assets/images/bg-top.png" alt="">
    <img class="nk-page-background-bottom" src="<?= base_url()?>assets/images/bg-bottom.png" alt="">

<!-- END: Page Background -->

    

    
        <!-- START: Search Modal -->
<div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0">Search</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form nk-form-style-1">
                    <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Search Modal -->
    

    
        <!-- START: Login Modal -->
<div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form text-white">
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            Use email and password:

                            <div class="nk-gap"></div>
                            <input type="email" value="" name="email" class=" form-control" placeholder="Email">

                            <div class="nk-gap"></div>
                            <input type="password" value="" name="password" class="required form-control" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            Or social account:

                            <div class="nk-gap"></div>

                            <ul class="nk-social-links-2">
                                <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                                <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                                <li><a class="nk-social-twitter" href="#"><span class="fab fa-twitter"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Sign In</a>
                        </div>
                        <div class="col-md-6">
                            <div class="mnt-5">
                                <small><a href="#">Forgot your password?</a></small>
                            </div>
                            <div class="mnt-5">
                                <small><a href="#">Not a member? Sign up</a></small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Login Modal -->

    

    
<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<script src="<?= base_url()?>assets/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- GSAP -->
<script src="<?= base_url()?>assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="<?= base_url()?>assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- Popper -->
<script src="<?= base_url()?>assets/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="<?= base_url()?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="<?= base_url()?>assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="<?= base_url()?>assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="<?= base_url()?>assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

<!-- imagesLoaded -->
<script src="<?= base_url()?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- Flickity -->
<script src="<?= base_url()?>assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

<!-- Photoswipe -->
<script src="<?= base_url()?>assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="<?= base_url()?>assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- Jquery Validation -->
<script src="<?= base_url()?>assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Jquery Countdown + Moment -->
<script src="<?= base_url()?>assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="<?= base_url()?>assets/vendor/moment/min/moment.min.js"></script>
<script src="<?= base_url()?>assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

<!-- Hammer.js -->
<script src="<?= base_url()?>assets/vendor/hammerjs/hammer.min.js"></script>

<!-- NanoSroller -->
<script src="<?= base_url()?>assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

<!-- SoundManager2 -->
<script src="<?= base_url()?>assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

<!-- Seiyria Bootstrap Slider -->
<script src="<?= base_url()?>assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

<!-- Summernote -->
<script src="<?= base_url()?>assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

<!-- nK Share -->
<script src="<?= base_url()?>assets/plugins/nk-share/nk-share.js"></script>

<!-- GoodGames -->
<script src="<?= base_url()?>assets/js/goodgames.min.js"></script>
<script src="assets/js/goodgames-init.js"></script>
<!-- END: Scripts -->


    
</body>
</html>
