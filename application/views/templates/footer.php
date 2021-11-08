<!-- START: Footer -->
<footer class="nk-footer">

    <div class="container">
        <div class="nk-gap-3"></div>
        <div class="row vertical-gap">
            <div class="col-md">
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
