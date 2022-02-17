<?php
require 'function/all_function.php';
head("pagina principala")
?>

    <!--====== Breadcrumb Start ======-->
    <section class="breadcrumb-section" style="background-image: url(assets/img/breadcrumb.jpg);">
        <div class="container">
            <span class="page-tag">Welcome to our company</span>
            <h1 class="page-title">contact us</h1>

            <ul class="breadcrumb-nav">
                <li><a href="contact.html#">Home</a></li>
                <li>contact us</li>
            </ul>
        </div>
    </section>
    <!--====== Breadcrumb end ======-->

    <!--====== Contact Maps Start ======-->
    <section class="contact-maps">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d16249.383697457268!2d91.8743084038307!3d24.893251768165847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1603347568911!5m2!1sen!2sbd"
            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>
    <!--====== Contact Maps End ======-->

    <!--====== Contact Section Start ======-->
    <section class="contact-section section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-10">
                    <div class="contact-info">
                        <div class="section-title mb-40">
                            <span class="title-tag">Contact info</span>
                            <h2 class="title">catch us here</h2>
                        </div>
                        <ul class="contact-info-list">
                            <li>
                                <p>
                                    2005 Stokes Isle Apt. 896, Venaville 10010, United States
                                </p>
                                <a href="contact.html#">Get Directions</a>
                            </li>
                            <li>
                                <p>
                                    +987-786-765-765-87 <br> +9 (877) 86-765-765-87
                                </p>
                                <a href="contact.html#">make call</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-10">
                    <div class="contact-form">
                        <form action="contact.html#">
                            <div class="row">
                                <div class="col-lg-6 mb-20">
                                    <input type="text" placeholder="First name" id="FirstName" name="FirstName">
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input type="text" placeholder="Last name" id="LastName" name="LastName">
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input type="email" placeholder="Email address" id="email" name="email">
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <select name="subject" id="subject">
                                        <option disabled selected>Subject</option>
                                        <option value="Subject One">Subject One</option>
                                        <option value="Subject Two">Subject Two</option>
                                        <option value="Subject Three">Subject Two</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-20">
                                    <textarea id="message" name="message"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="main-btn main-btn-2">Get A Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Contact Section End ======-->

    <!--====== Footer area start ======-->
    <footer>
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget text-block-widget">
                            <h4 class="widget-title">About Us.</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adi
                                pisicing elit, sed do eiusmod tempor incidid
                                unt ut labore et dolore magna aliqua. Ut en
                                im ad minim veniam, quis nostrud exercit
                                ation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.
                            </p>
                            <a href="contact.html#" class="read-more-btn">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget menu-widget">
                            <h4 class="widget-title">Our Pages.</h4>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="blog.html">Latest Post</a></li>
                                <li><a href="contact.html#">Selling Tips</a></li>
                                <li><a href="contact.html#">Advertising</a></li>
                                <li><a href="contact.html#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget menu-widget">
                            <h4 class="widget-title">services.</h4>
                            <ul>
                                <li><a href="service-details.html">web development</a></li>
                                <li><a href="service-details.html">ui/ux design</a></li>
                                <li><a href="service-details.html">app development</a></li>
                                <li><a href="service-details.html">game development</a></li>
                                <li><a href="service-details.html">consultancy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 offset-lg-1">
                        <div class="widget newsletter-widget">
                            <h4 class="widget-title">Newsletter.</h4>
                            <form action="contact.html#">
                                <div class="input-group">
                                    <input type="text" placeholder="Enter full name">
                                    <span class="icon"><i class="fal fa-user"></i></span>
                                </div>
                                <div class="input-group">
                                    <input type="email" placeholder="Enter email address">
                                    <span class="icon"><i class="fal fa-envelope"></i></span>
                                </div>
                                <div class="input-group">
                                    <button type="submit" class="main-btn">
                                        <span class="icon-left fal fa-paper-plane"></span>Submit Now
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6 col-12">
                        <div class="footer-logo text-center text-md-left">
                            <img src="assets/img/logo.png" alt="Yankee">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="copyright text-center text-md-right">
                            <p>Copyright ©2020. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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