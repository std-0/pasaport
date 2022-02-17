<?php
require 'function/all_function.php';
head('Pagina principala');
?>

    <!--====== Breadcrumb Start ======-->
    <section class="breadcrumb-section" style="background-image: url(assets/img/breadcrumb.jpg);">
        <div class="container">
            <span class="page-tag">Welcome to our company</span>
            <h1 class="page-title">Our Services</h1>

            <ul class="breadcrumb-nav">
                <li><a href="services.html#">Home</a></li>
                <li>What we do</li>
            </ul>
        </div>
    </section>
    <!--====== Breadcrumb end ======-->

    <!--====== Service With counter Start ======-->
    <?php
    services();
    ?>
    <!--====== Service With Fact End ======-->

    <!--====== Process Section Start ======-->
    <section class="process-section section-gap grey-bg">
        <div class="container">
            <div class="section-title text-center mb-80 wow fadeInLeft">
                <span class="title-tag">process</span>
                <h2 class="title">
                    how we work
                </h2>
            </div>
            <div class="feature-boxes masonry-layout">
                <div class="feature-box wow fadeInLeft" data-wow-delay="300ms">
                    <div class="icon">
                        <i class="flaticon-mobile-app"></i>
                    </div>
                    <h6 class="title">Level research</h6>
                </div>
                <div class="feature-box wow fadeInUp" data-wow-delay="400ms">
                    <div class="icon">
                        <i class="flaticon-analysis"></i>
                    </div>
                    <h6 class="title">Level research</h6>
                </div>
                <div class="feature-box wow fadeInUp" data-wow-delay="400ms">
                    <div class="icon">
                        <i class="flaticon-web-search-engine"></i>
                    </div>
                    <h6 class="title">Level research</h6>
                </div>
                <div class="feature-box wow fadeInUp" data-wow-delay="400ms">
                    <div class="icon">
                        <i class="flaticon-statistics"></i>
                    </div>
                    <h6 class="title">Level research</h6>
                </div>
                <div class="feature-box wow fadeInUp" data-wow-delay="400ms">
                    <div class="icon">
                        <i class="flaticon-box"></i>
                    </div>
                    <h6 class="title">Level research</h6>
                </div>
            </div>
        </div>
    </section>
    <!--====== Process Section End ======-->

    <!--====== Price area start ======-->
    <section class="pricing-section section-gap" style="background-image: url(assets/img/pricing-bg.jpg);">
        <div class="container">
            <div class="section-title white-color text-center mb-50 wow fadeInLeft" data-wow-delay="400ms">
                <span class="title-tag">Price</span>
                <h2 class="title">
                    Price & palns
                </h2>
            </div>
            <div class="row pricing-boxes  justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInLeft" data-wow-delay="400ms">
                    <div class="pricing-box">
                        <div class="paln-title">
                            <span>Standerd Plan</span>
                            <span class="paln-price">19</span>
                        </div>
                        <div class="paln-desc">
                            <ul>
                                <li><i class="fal fa-check"></i>Unlimited revisions</li>
                                <li><i class="fal fa-check"></i>free ui/ux support</li>
                                <li><i class="fal fa-check"></i>free support</li>
                                <li><i class="fal fa-check"></i>100+ blocks development</li>
                                <li><i class="fal fa-check"></i>seo optimization</li>
                                <li><i class="fal fa-check"></i>24/7 online support</li>
                            </ul>
                            <a href="services.html#" class="main-btn main-btn-4">
                                <span class="icon-left far fa-shopping-cart"></span>Purchase now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="500ms">
                    <div class="pricing-box active-plan">
                        <div class="paln-title">
                            <span>Advanced Plan</span>
                            <span class="paln-price">59</span>
                        </div>
                        <div class="paln-desc">
                            <ul>
                                <li><i class="fal fa-check"></i>Unlimited revisions</li>
                                <li><i class="fal fa-check"></i>free ui/ux support</li>
                                <li><i class="fal fa-check"></i>free support</li>
                                <li><i class="fal fa-check"></i>100+ blocks development</li>
                                <li><i class="fal fa-check"></i>seo optimization</li>
                                <li><i class="fal fa-check"></i>24/7 online support</li>
                            </ul>
                            <a href="services.html#" class="main-btn main-btn-4">
                                <span class="icon-left far fa-shopping-cart"></span>Purchase now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInRight" data-wow-delay="600ms">
                    <div class="pricing-box">
                        <div class="paln-title">
                            <span>Team Plan</span>
                            <span class="paln-price">99</span>
                        </div>
                        <div class="paln-desc">
                            <ul>
                                <li><i class="fal fa-check"></i>Unlimited revisions</li>
                                <li><i class="fal fa-check"></i>free ui/ux support</li>
                                <li><i class="fal fa-check"></i>free support</li>
                                <li><i class="fal fa-check"></i>100+ blocks development</li>
                                <li><i class="fal fa-check"></i>seo optimization</li>
                                <li><i class="fal fa-check"></i>24/7 online support</li>
                            </ul>
                            <a href="services.html#" class="main-btn main-btn-4">
                                <span class="icon-left far fa-shopping-cart"></span>Purchase now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Price area End ======-->

    <!--====== Skill Section Start ======-->
    <section class="skill-section-three section-gap-top">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="col-lg-6 col-md-10 order-lg-last wow fadeInRight">
                    <div class="skills-img">
                        <img src="assets/img/skills/02.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-5 col-md-10 order-lg-first wow fadeInLeft">
                    <div class="section-title mb-50">
                        <span class="title-tag">skillset</span>
                        <h2 class="title">Our Skills</h2>
                    </div>
                    <div class="skill-progress-bars">
                        <div class="skill-progress" data-count="73">
                            <div class="title">
                                <span>Graphic design</span>
                                <span class="progress-counter"><span class="count">73</span>%</span>
                            </div>
                            <div class="progressbar-wrap">
                                <div class="progressbar">
                                </div>
                                <div class="progressbarV"></div>
                            </div>
                        </div>
                        <div class="skill-progress" data-count="80">
                            <div class="title">
                                <span>Game design</span>
                                <span class="progress-counter"><span class="count">80</span>%</span>
                            </div>
                            <div class="progressbar-wrap">
                                <div class="progressbar">
                                </div>
                                <div class="progressbarV"></div>
                            </div>
                        </div>
                        <div class="skill-progress" data-count="75">
                            <div class="title">
                                <span>App Development</span>
                                <span class="progress-counter"><span class="count">75</span>%</span>
                            </div>
                            <div class="progressbar-wrap">
                                <div class="progressbar">
                                </div>
                                <div class="progressbarV"></div>
                            </div>
                        </div>
                        <div class="skill-progress" data-count="85">
                            <div class="title">
                                <span>Web Development</span>
                                <span class="progress-counter"><span class="count">85</span>%</span>
                            </div>
                            <div class="progressbar-wrap">
                                <div class="progressbar">
                                </div>
                                <div class="progressbarV"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Skill Section End ======-->

    <!--====== Footer area start ======-->
    <?php
	footer();
	?>
    <!--====== Footer area end ======-->

	<!--====== jquery js ======-->
	<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
	<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
	<!--====== Bootstrap js ======-->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<!--====== Slick js ======-->
	<script src="assets/js/slick.min.js"></script>
	<!--====== Isotope js ======-->
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<!--====== Imagesloaded js ======-->
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<!--====== Magnific Popup js ======-->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!--====== inview js ======-->
	<script src="assets/js/jquery.inview.min.js"></script>
	<!--====== Wow JS ======-->
	<script src="assets/js/wow.min.js"></script>
	<!--====== Main js ======-->
	<script src="assets/js/main.js"></script>
</body>

</html>