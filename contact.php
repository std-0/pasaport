<?php
require 'function/all_function.php';
head("pagina principala")
?>

    <!--====== Breadcrumb Start ======-->
    <section class="breadcrumb-section" style="background-image: url(assets/img/banner/baner01.jpg);">
        <div class="container">
            <span class="page-tag" style="font-style:capitalize">румынские паспорты</span>
            <h1 class="page-title small_text" style="font-size:80px;">СВЯЗАТЬСЯ С НАМИ</h1>

            
        </div>
    </section>
    <!--====== Breadcrumb end ======-->

    <!--====== Contact Section Start ======-->
    <section class="contact-section section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-10">
                    <div class="contact-info">
                        <div class="section-title mb-40">
                            <span class="title-tag">Контактная информация</span>
                            <h2 class="title">поместите данные здесь</h2>
                        </div>
                        <ul class="contact-info-list">
                           
                            <li>
                                <p>
                                    <a href="tel:+40745336400">+40745336400</a>
                                   
                                </p>
                               
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-10">
                    <div class="contact-form">
                        <form action="contact.html#">
                            <div class="row">
                                <div class="col-lg-6 mb-20">
                                    <input type="text" placeholder="полное имя" id="FirstName" name="FirstName">
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input type="text" placeholder="телефонный номер" id="LastName" name="LastName">
                                </div>
                             
                                <div class="col-12 mb-20">
                                    <textarea id="message" name="message" placeholder="Что вас интересует"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="main-btn main-btn-2">получить консультацию</button>
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