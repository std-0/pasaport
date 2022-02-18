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

	<!--====== Gallery Start ======-->
	<!-- <section class="gallery-section">
		<div class="container-fluid">
			<div class="gallery-images">
				<div class="images text-center wow fadeInLeft">
					<img src="assets/img/gallery/01.jpg" alt="Image">
				</div>
				<div class="images text-center wow fadeInUp">
					<img src="assets/img/gallery/03.jpg" alt="Image">
				</div>
				<div class="images text-center wow fadeInRight">
					<img src="assets/img/gallery/02.jpg" alt="Image">
				</div>
			</div>
		</div>
	</section> -->
	<!--====== Gallery End ======-->

	<!--====== Portfolio start ======-->
	<!-- <section class="portfolio-section section-gap" id="portfolio">
		<div class="container">
			<div class="row align-items-center mb-80">
				<div class="col-lg-4">
					<div class="section-title text-center text-lg-left wow fadeInLeft" data-wow-delay="400ms">
						<span class="title-tag">Portfolio</span>
						<h2 class="title">
							our works
						</h2>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="portfolio-nav wow fadeInRight" data-wow-delay="400ms">
						<ul>
							<li data-filter="*">all works</li>
							<li data-filter=".design" class="active">design</li>
							<li data-filter=".web">web development</li>
							<li data-filter=".game">game design</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row portfolio-items portfolio-filter wow fadeInUp" data-wow-delay="400ms">
				<div class="col-lg-3 col-md-6 col-sm-6 filter-item design web">
					<div class="portfolio-item">
						<div class="portfolio-thumb">
							<div class="thumb" style="background-image: url(assets/img/portfolio/01.jpg);"></div>
						</div>
						<div class="portfolio-desc">
							<span class="cat">design, ui/ux</span>
							<h5 class="title"><a href="portfolio-details.html">miranda halim branding</a></h5>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 filter-item game">
					<div class="portfolio-item big-item">
						<div class="portfolio-thumb">
							<div class="thumb" style="background-image: url(assets/img/portfolio/02.jpg);"></div>
						</div>
						<div class="portfolio-desc">
							<span class="cat">design, ui/ux</span>
							<h5 class="title"><a href="portfolio-details.html">miranda halim branding</a></h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 filter-item web">
					<div class="portfolio-item">
						<div class="portfolio-thumb">
							<div class="thumb" style="background-image: url(assets/img/portfolio/02.jpg);"></div>
						</div>
						<div class="portfolio-desc">
							<span class="cat">design, ui/ux</span>
							<h5 class="title"><a href="portfolio-details.html">miranda halim branding</a></h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 filter-item design">
					<div class="portfolio-item">
						<div class="portfolio-thumb">
							<div class="thumb" style="background-image: url(assets/img/portfolio/04.jpg);"></div>
						</div>
						<div class="portfolio-desc">
							<span class="cat">design, ui/ux</span>
							<h5 class="title"><a href="portfolio-details.html">miranda halim branding</a></h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 filter-item game web">
					<div class="portfolio-item">
						<div class="portfolio-thumb">
							<div class="thumb" style="background-image: url(assets/img/portfolio/05.jpg);"></div>
						</div>
						<div class="portfolio-desc">
							<span class="cat">design, ui/ux</span>
							<h5 class="title"><a href="portfolio-details.html">miranda halim branding</a></h5>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-center">
					<a href="index.html#" class="main-btn main-btn-3 mt-40">More works <span class="icon">+</span></a>
				</div>
			</div>
		</div>
	</section> -->
	<!--====== Portfolio End ======-->

	<!--====== Skill Section Start ======-->
	<!-- <section class="skill-section" style="background-image: url(assets/img/pattern/01.jpg);">
		<div class="container">
			<div class="row skill-progress-bars white-bars">
				<div class="col-lg-6 col-md-6">
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
				</div>
				<div class="col-lg-6 col-md-6">
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
				</div>
				<div class="col-lg-6 col-md-6">
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
				</div>
				<div class="col-lg-6 col-md-6">
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
	</section> -->
	<!--====== Skill Section End ======-->

	<!--====== Team Section Start ======-->
	<!-- <section class="team-section section-gap wow fadeInUp">
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
								<li><a href="index.html#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="index.html#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="index.html#"><i class="fab fa-behance"></i></a></li>
								<li><a href="index.html#"><i class="fab fa-youtube"></i></a></li>
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
								<li><a href="index.html#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="index.html#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="index.html#"><i class="fab fa-behance"></i></a></li>
								<li><a href="index.html#"><i class="fab fa-youtube"></i></a></li>
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
								<li><a href="index.html#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="index.html#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="index.html#"><i class="fab fa-behance"></i></a></li>
								<li><a href="index.html#"><i class="fab fa-youtube"></i></a></li>
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
								<li><a href="index.html#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="index.html#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="index.html#"><i class="fab fa-behance"></i></a></li>
								<li><a href="index.html#"><i class="fab fa-youtube"></i></a></li>
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
								<li><a href="index.html#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="index.html#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="index.html#"><i class="fab fa-behance"></i></a></li>
								<li><a href="index.html#"><i class="fab fa-youtube"></i></a></li>
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
								<li><a href="index.html#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="index.html#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="index.html#"><i class="fab fa-behance"></i></a></li>
								<li><a href="index.html#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--====== Team Section End ======-->
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