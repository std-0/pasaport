<?php
require 'function/all_function.php';
head("Pagina principala");
?>

	<!--====== Banner Slider Start ======-->
	<?php
	banner();
	?>
	<!--====== Banner Slider End ======-->

	<!--====== About Section Start ======-->
	<section class="about-section section-gap">
		<div class="container">
			<div class="row justify-content-lg-between align-items-center justify-content-center">
				<div class="col-lg-5 col-md-8">
					<div class="about-tag-img wow fadeInLeft">
						<img src="assets/img/about/photo.png" alt="Image">
						<div class="experience-tag">
							<div>
								<span class="big">5</span>
								Лет Опыта
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-10">
					<div class="about-text p-left wow fadeInRight">
						<div class="section-title mb-30">
							<span class="title-tag">О Нас</span>
							<h2 class="title">
							С ПАСПОРТОМ РУМЫНИИ <span>ВЫ ПОЛУЧИТЕ:</span>
							</h2>
							
						</div>
						
						<ul class="mt-40">
							<li><span>---</span> Безвизовое путешествие по миру</li>
							<li><span>---</span> Официальное трудоустройство в ЕС</li>
							<li><span>---</span> Стабильность и безопасность</li>
							<li><span>---</span> Финансовая независимость</li>
							<li><span>---</span> Высокие социальные стандарты</li>
						</ul>
						<a href="about.php" class="main-btn main-btn-2 mt-30">Узнать Больше<span class="icon">+</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== About Section End ======-->

	<!--====== Service With counter Start ======-->
	<?
	services();
	?>
	<!--====== Service With Fact End ======-->

	<!--====== Feature Section Start ======-->
	<section class="feature-section section-gap square-shape">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 col-md-10 order-2 order-lg-1">
					<div class="feature-text">
						<div class="section-title mb-40 wow fadeInLeft" data-wow-delay="300ms">
							<span class="title-tag">О Нас</span>
							<h2 class="title">
							ПРЕИМУЩЕСТВА РАБОТЫ С НАМИ 
							</h2>
							
						</div>
						<ul class="feature-lists">
							<li class="wow fadeInUp" data-wow-delay="300ms">
								<div class="icon color-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                </svg>
								</div>
								<div class="desc">
									<h5>ЛЕГКО</h5>
									<p>
									Профессиональная юридическая помощь и сопровождение
									</p>
								</div>
							</li>
							<li class="wow fadeInUp" data-wow-delay="400ms">
								<div class="icon color-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                                <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                                <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                                </svg>
								</div>
								<div class="desc">
									<h5>ЗАКОННО</h5>
									<p>
									Оформление паспорта ЕС согласно румынскому законодательству
									</p>
								</div>
							</li>
							<li class="wow fadeInUp" data-wow-delay="300ms">
								<div class="icon color-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                </svg>
								</div>
								<div class="desc">
									<h5>БЫСТРО</h5>
									<p>
									Получение гражданства Евросоюза от 12 месяцев
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-10 order-1 order-lg-2">
					<div class="feature-gallery">
						<img src="assets/img/feature/pasport-romania.jpg" alt="Image" class="wow fadeInRight" data-wow-delay="400ms">
						<img src="assets/img/feature/untitled-1.png" alt="Image" class="wow fadeInRight" data-wow-delay="500ms">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== Feature Section End ======-->

	<!--====== Call to section Start ======-->
	<section class="cta-section" style="background-image: url(assets/img/form.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="cta-text text-center ">
						<div class="section-title white-color mb-40 wow fadeInLeft" data-wow-delay="400ms">
							<span class="title-tag">Контакты</span>
							<h2 class="title">
							Ответим на ваши вопросы  <span>Свяжитесь с нами</span>
							</h2>
						</div>
						<ul class="cta-btns">
							<li class="wow fadeInLeft" data-wow-delay="400ms">
								<a href="contact.php" class="main-btn"><span class="icon-left far fa-envelope"></span>НАПИШИТЕ НАМ СЕЙЧАС</a>
							</li>
							<li class="wow fadeInRight" data-wow-delay="400ms">
								<a href="contact.php" class="main-btn main-btn-2">СВЯЗАТЬСЯ СЕЙЧАС <span class="icon">+</span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== Call to section End ======-->

<br>
	<?php
	testimonials();
	?>

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