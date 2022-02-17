<?php
require 'function/all_function.php';
head('Pagina principala');
?>

    <!--====== Breadcrumb Start ======-->
    <section class="breadcrumb-section" style="background-image: url(assets/img/breadcrumb.jpg);">
        <div class="container">
            <span class="page-tag">Welcome to our company</span>
            <h1 class="page-title">About us</h1>

            <ul class="breadcrumb-nav">
                <li><a href="about.html#">Home</a></li>
                <li>About us</li>
            </ul>
        </div>
    </section>
    <!--====== Breadcrumb end ======-->

    <!--====== About Section Start ======-->
    <section class="about-section section-gap">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-10">
                    <div class="about-gallery">
                        <div class="image-one" style="background-image: url(assets/img/about/about-gallery-1.jpg);">
                        </div>
                        <div class="image-two" style="background-image: url(assets/img/about/about-gallery-2.jpg);">
                        </div>
                        <div class="image-three" style="background-image: url(assets/img/about/about-gallery-3.jpg);">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-10">
                    <div class="about-text p-left">
                        <div class="section-title mb-30">
                            <span class="title-tag">About us</span>
                            <h2 class="title">
                                Get Amazing result <span>With solid team</span>
                            </h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt.
                            </p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris.
                        </p>
                        <div class="founder-info mt-40">
                            <div>
                                <img src="assets/img/about/founder.jpg" alt="Founder">
                            </div>
                            <div>
                                <h3>Rosalina D. william</h3>
                                <span>Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== About Section End ======-->

    <!--====== Counter Start ======-->
    <section class="counter-section counter-boxed-style">
        <div class="container">
            <div class="counter-boxed-innter">
                <div class="row counter-boxes">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box white-style text-center">
                            <span class="count">4550</span>
                            <span class="title">Active Users</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box white-style text-center">
                            <span class="count">987</span>
                            <span class="title">Get rewards</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box white-style text-center">
                            <span class="count">9700</span>
                            <span class="title">cup of coffee</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box white-style text-center">
                            <span class="count">100</span>
                            <span class="title">country coverage</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Counter End ======-->

    <!--====== History Section Start ======-->
    <section class="history-section grey-bg">
        <div class="container">
            <div class="section-title text-center mb-80">
                <span class="title-tag">History</span>
                <h2 class="title">our journey</h2>
            </div>
        </div>
        <div class="history-timeline">
            <div class="container-fluid container-1500">
                <div class="timeline-btn-with-progess">
                    <div class="progress">
                        <div class="progress-bar" id="timelinProgess" role="progressbar">
                        </div>
                    </div>

                    <ul class="nav timeline-tab-btns" role="tablist">
                        <li class="nav-item list-active">
                            <a class="nav-link active" href="about.html#tab-1" role="tab" data-toggle="tab">2000</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html#tab-2" role="tab" data-toggle="tab">2005</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html#tab-3" role="tab" data-toggle="tab">2008</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html#tab-4" role="tab" data-toggle="tab">2012</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html#tab-5" role="tab" data-toggle="tab">2015</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html#tab-6" role="tab" data-toggle="tab">2020</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active show" id="tab-1">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-7 col-md-10 order-lg-last">
                                <div class="timeline-images row align-items-center">
                                    <div class="col-lg-6 col-6">
                                        <div class="image text-right">
                                            <img src="assets/img/timeline-1.jpg" alt="Timeline">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="image text-right">
                                            <img src="assets/img/timeline-2.jpg" alt="Timeline">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-10 order-lg-first">
                                <div class="timeline-text">
                                    <span class="timeline-tag">2005 - Get rewards</span>
                                    <h2 class="timeline-title">
                                        We just recived an from drem co.
                                    </h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                    </p>
                                    <a href="about.html#" class="main-btn">Get Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab-2">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-7 col-md-10 order-lg-last">
                                <div class="timeline-images row align-items-center">
                                    <div class="col-lg-6 col-6">
                                        <div class="image text-right">
                                            <img src="assets/img/timeline-1.jpg" alt="Timeline">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="image text-right">
                                            <img src="assets/img/timeline-2.jpg" alt="Timeline">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-10 order-lg-first">
                                <div class="timeline-text">
                                    <span class="timeline-tag">2005 - Get rewards</span>
                                    <h2 class="timeline-title">
                                        We just recived an from drem co.
                                    </h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                    </p>
                                    <a href="about.html#" class="main-btn">Get Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab-3">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-7 col-md-10 order-lg-last">
                                <div class="timeline-images row align-items-center">
                                    <div class="col-lg-6 col-6">
                                        <div class="image text-right">
                                            <img src="assets/img/timeline-1.jpg" alt="Timeline">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="image text-right">
                                            <img src="assets/img/timeline-2.jpg" alt="Timeline">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-10 order-lg-first">
                                <div class="timeline-text">
                                    <span class="timeline-tag">2005 - Get rewards</span>
                                    <h2 class="timeline-title">
                                        We just recived an from drem co.
                                    </h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                    </p>
                                    <a href="about.html#" class="main-btn">Get Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab-4">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-7 col-md-10 order-lg-last">
                                <div class="timeline-images row align-items-center">
                                    <div class="col-lg-6 col-6">
                                        <div class="image text-right">
                                            <img src="assets/img/timeline-1.jpg" alt="Timeline">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="image text-right">
                                            <img src="assets/img/timeline-2.jpg" alt="Timeline">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-10 order-lg-first">
                                <div class="timeline-text">
                                    <span class="timeline-tag">2005 - Get rewards</span>
                                    <h2 class="timeline-title">
                                        We just recived an from drem co.
                                    </h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                    </p>
                                    <a href="about.html#" class="main-btn">Get Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab-5">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-7 col-md-10 order-lg-last">
                                <div class="timeline-images row align-items-center">
                                    <div class="col-lg-6 col-6">
                                        <div class="image text-right">
                                            <img src="assets/img/timeline-1.jpg" alt="Timeline">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="image text-right">
                                            <img src="assets/img/timeline-2.jpg" alt="Timeline">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-10 order-lg-first">
                                <div class="timeline-text">
                                    <span class="timeline-tag">2005 - Get rewards</span>
                                    <h2 class="timeline-title">
                                        We just recived an from drem co.
                                    </h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                    </p>
                                    <a href="about.html#" class="main-btn">Get Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab-6">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-7 col-md-10 order-lg-last">
                                <div class="timeline-images row align-items-center">
                                    <div class="col-lg-6 col-6">
                                        <div class="image text-right">
                                            <img src="assets/img/timeline-1.jpg" alt="Timeline">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="image text-right">
                                            <img src="assets/img/timeline-2.jpg" alt="Timeline">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-10 order-lg-first">
                                <div class="timeline-text">
                                    <span class="timeline-tag">2005 - Get rewards</span>
                                    <h2 class="timeline-title">
                                        We just recived an from drem co.
                                    </h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                    </p>
                                    <a href="about.html#" class="main-btn">Get Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== History Section End ======-->

    <!--====== Team Section Start ======-->
    <section class="team-section section-gap">
        <div class="container">
            <div class="section-title text-center mb-50">
                <span class="title-tag">Expert</span>
                <h2 class="title"> Expert team </h2>
            </div>
            <div class="row team-members team-member-slider">
                <div class="col-lg-4">
                    <div class="team-member">
                        <div class="member-image">
                            <img src="assets/img/team/01.jpg" alt="Team Member">
                        </div>
                        <div class="member-desc">
                            <span class="position">founder</span>
                            <h3 class="name">Rosalina d. william</h3>
                            <ul class="social-links">
                                <li><a href="about.html#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="about.html#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <div class="member-image">
                            <img src="assets/img/team/02.jpg" alt="Team Member">
                        </div>
                        <div class="member-desc">
                            <span class="position">CEO</span>
                            <h3 class="name">Romada r. miran</h3>
                            <ul class="social-links">
                                <li><a href="about.html#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="about.html#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <div class="member-image">
                            <img src="assets/img/team/03.jpg" alt="Team Member">
                        </div>
                        <div class="member-desc">
                            <span class="position">designer</span>
                            <h3 class="name">Miranda h. halim</h3>
                            <ul class="social-links">
                                <li><a href="about.html#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="about.html#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <div class="member-image">
                            <img src="assets/img/team/05.jpg" alt="Team Member">
                        </div>
                        <div class="member-desc">
                            <span class="position">founder</span>
                            <h3 class="name">Rosalina d. william</h3>
                            <ul class="social-links">
                                <li><a href="about.html#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="about.html#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <div class="member-image">
                            <img src="assets/img/team/05.jpg" alt="Team Member">
                        </div>
                        <div class="member-desc">
                            <span class="position">CEO</span>
                            <h3 class="name">Romada r. miran</h3>
                            <ul class="social-links">
                                <li><a href="about.html#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="about.html#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <div class="member-image">
                            <img src="assets/img/team/06.jpg" alt="Team Member">
                        </div>
                        <div class="member-desc">
                            <span class="position">designer</span>
                            <h3 class="name">Miranda h. halim</h3>
                            <ul class="social-links">
                                <li><a href="about.html#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="about.html#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="about.html#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="about.html#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Team Section End ======-->

    <!--====== Testimonials Start ======-->
    <section class="testimonials-section">
        <div class="container">
            <div class="testimonials-inner">
                <div class="testimonials-slider">
                    <div class="single-testimonial">
                        <div class="atuthor-thumb">
                            <img src="assets/img/testimonial/testimonial-author-01.jpg" alt="Image">
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat dolor in reprehenderit in voluptate.
                        </p>
                        <div class="atuthor-info">
                            <h3 class="name">Rosalina D. william</h3>
                            <span>Founder</span>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="atuthor-thumb">
                            <img src="assets/img/testimonial/testimonial-author-02.jpg" alt="Image">
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat dolor in reprehenderit in voluptate.
                        </p>
                        <div class="atuthor-info">
                            <h3 class="name">Rosalina D. william</h3>
                            <span>Founder</span>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="atuthor-thumb">
                            <img src="assets/img/testimonial/testimonial-author-01.jpg" alt="Image">
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat dolor in reprehenderit in voluptate.
                        </p>
                        <div class="atuthor-info">
                            <h3 class="name">Rosalina D. william</h3>
                            <span>Founder</span>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="atuthor-thumb">
                            <img src="assets/img/testimonial/testimonial-author-02.jpg" alt="Image">
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat dolor in reprehenderit in voluptate.
                        </p>
                        <div class="atuthor-info">
                            <h3 class="name">Rosalina D. william</h3>
                            <span>Founder</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Testimonials End ======-->

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