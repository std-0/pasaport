<?php
require'function/all_function.php';
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
	<section class="service-section with-counter-box">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<!-- <div class="col-xl-2 col-lg-8">
					 <div class="counter-boxes row">
						<div class="col-xl-12 col-sm-4 col-6 wow fadeInUp" data-wow-delay="300ms">
							<div class="counter-box">
								<span class="count">4550</span>
								<span class="title">Active Users</span>
							</div>
						</div>
						<div class="col-xl-12 col-sm-4 col-6 wow fadeInUp" data-wow-delay="400ms">
							<div class="counter-box">
								<span class="count">987</span>
								<span class="title">Get Rewarda</span>
							</div>
						</div>
						<div class="col-xl-12 col-sm-4 col-6 wow fadeInUp" data-wow-delay="500ms">
							<div class="counter-box">
								<span class="count">9700</span>
								<span class="title">Cup of Coffee</span>
							</div>
						</div>
					</div> 	
				</div> -->
				<div class="col-xl-10">
					<div class="service-boxes wow fadeInRight" data-wow-delay="400ms">
						<div class="service-box">
							<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-file-bar-graph" viewBox="0 0 16 16">
                            <path d="M4.5 12a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1zm3 0a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm3 0a.5.5 0 0 1-.5-.5v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1z"/>
                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                            </svg>
							</div>
							<h4 class="title">
								<a href="services.php">Сбор, подготовка,<br>апостиль документов</a>
							</h4>
							<a href="services.php" class="service-link"><i class="fal fa-arrow-right"></i></a>
						</div>
						<div class="service-box">
							<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                            </svg>
							</div>
							<h4 class="title">
								<a href="services.php">Персональное сопровождение <br>при подаче на гражданство</a>
							</h4>
							<a href="services.php" class="service-link"><i class="fal fa-arrow-right"></i></a>
						</div>
						<div class="service-box">
							<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                            </svg>
							</div>
							<h4 class="title">
								<a href="services.php">Подготовка <br> к сдаче присяги</a>
							</h4>
							<a href="services.php" class="service-link"><i class="fal fa-arrow-right"></i></a>
						</div>
						<div class="service-box">
							<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-postcard" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4Zm7.5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7ZM2 5.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5ZM10.5 5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3ZM13 8h-2V6h2v2Z"/>
                            </svg>
							</div>
							<h4 class="title">
								<a href="services.php">Получение второго <br> гражданства</a>
							</h4>
							<a href="services.php" class="service-link"><i class="fal fa-arrow-right"></i></a>
						</div>
						<div class="service-box">
							<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
							</div>
							<h4 class="title">
								<a href="services.php">Оформление внутренних <br> европейских документов</a>
							</h4>
							<a href="services.php" class="service-link"><i class="fal fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
								incididunt.
							</p>
						</div>
						<ul class="feature-lists">
							<li class="wow fadeInUp" data-wow-delay="300ms">
								<div class="icon color-1">
									<i class="flaticon-box-1"></i>
								</div>
								<div class="desc">
									<h5>security & location</h5>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor
										incididunt ut labore et dolore magna aliqua enim ad minim veniam.
									</p>
								</div>
							</li>
							<li class="wow fadeInUp" data-wow-delay="400ms">
								<div class="icon color-2">
									<i class="flaticon-globe"></i>
								</div>
								<div class="desc">
									<h5>support & customization</h5>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor
										incididunt ut labore et dolore magna aliqua enim ad minim veniam.
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-10 order-1 order-lg-2">
					<div class="feature-gallery">
						<img src="assets/img/feature/01.jpg" alt="Image" class="wow fadeInRight" data-wow-delay="400ms">
						<img src="assets/img/feature/02.jpg" alt="Image" class="wow fadeInRight" data-wow-delay="500ms">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== Feature Section End ======-->

	<!--====== Call to section Start ======-->
	<section class="cta-section" style="background-image: url(assets/img/cta-bg.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="cta-text text-center ">
						<div class="section-title white-color mb-40 wow fadeInLeft" data-wow-delay="400ms">
							<span class="title-tag">call to action</span>
							<h2 class="title">
								anything on your mind <span>let us know</span>
							</h2>
						</div>
						<ul class="cta-btns">
							<li class="wow fadeInLeft" data-wow-delay="400ms">
								<a href="index.html#" class="main-btn"><span class="icon-left far fa-envelope"></span>mail us
									now</a>
							</li>
							<li class="wow fadeInRight" data-wow-delay="400ms">
								<a href="index.html#" class="main-btn main-btn-2">contact now <span class="icon">+</span></a>
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
	<section class="portfolio-section section-gap" id="portfolio">
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
	</section>
	<!--====== Portfolio End ======-->

	<!--====== Skill Section Start ======-->
	<section class="skill-section" style="background-image: url(assets/img/pattern/01.jpg);">
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
	</section>
	<!--====== Skill Section End ======-->

	<!--====== Team Section Start ======-->
	<section class="team-section section-gap wow fadeInUp">
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
	</section>
	<!--====== Team Section End ======-->

	<!--====== Latest blog Start ======-->
	<section class="latest-blog-section section-gap dark-bg">
		<div class="container">
			<div class="section-title white-color mb-30">
				<span class="title-tag">Blog</span>
				<h2 class="title"> News feeds </h2>
			</div>
			<div class="row latest-blog-posts justify-content-center">
				<div class="col-lg-4 col-md-6 col-sm-10 wow fadeInLeft">
					<div class="latest-blog-post">
						<div class="blog-thumb">
							<div class="thumb" style="background-image: url(assets/img/latest-blog/01.jpg);"></div>
							<span class="blog-date">24th nov 2020</span>
						</div>
						<div class="blog-desc">
							<h3 class="title">
								<a href="index.html#">Megenta ridim is a fire squed for help.</a>
							</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp">
					<div class="latest-blog-post">
						<div class="blog-thumb">
							<div class="thumb" style="background-image: url(assets/img/latest-blog/02.jpg);"></div>
							<span class="blog-date">24th nov 2020</span>
						</div>
						<div class="blog-desc">
							<h3 class="title">
								<a href="index.html#">Megenta ridim is a fire squed for help.</a>
							</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-10 wow fadeInRight">
					<div class="latest-blog-post">
						<div class="blog-thumb">
							<div class="thumb" style="background-image: url(assets/img/latest-blog/03.jpg);"></div>
							<span class="blog-date">24th nov 2020</span>
						</div>
						<div class="blog-desc">
							<h3 class="title">
								<a href="index.html#">Megenta ridim is a fire squed for help.</a>
							</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== Latest blog End ======-->

	<!--====== Footer area start ======-->
	<?php
	footer()
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