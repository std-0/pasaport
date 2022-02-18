<?php
require 'function/all_function.php';
head('Pagina principala');
?>

    <!--====== Breadcrumb Start ======-->
    <section class="breadcrumb-section" style="background-image: url(assets/img/baner01.jpg);">
        <div class="container">
            <span class="page-tag">Оформление </span>
            <h1 class="page-title">румынского Паспорта</h1>

            <!-- <ul class="breadcrumb-nav">
                <li><a href="services.html#">Home</a></li>
                <li>What we do</li>
            </ul> -->
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
                <span class="title-tag">ПОЧЕМУ ВЫГОДНО</span>
                <h2 class="title">
                 РАБОТАТЬ С НАМИ
                </h2>
            </div>
            <div class="feature-boxes masonry-layout">
                <div class="feature-box wow fadeInLeft" data-wow-delay="300ms">
                    <div class="icon">
                        <i class="flaticon-mobile-app"></i>
                    </div>
                    <h6 class="title">Простая процедура</h6>
                </div>
                <div class="feature-box wow fadeInUp" data-wow-delay="400ms">
                    <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                    <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                    <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                    </svg>
                    </div>
                    <h6 class="title">Не нужно знать язык</h6>
                </div>
                <div class="feature-box wow fadeInUp" data-wow-delay="400ms">
                    <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                    <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
                    </svg>
                    </div>
                    <h6 class="title">Без проживания в стране</h6>
                </div>
                <div class="feature-box wow fadeInUp" data-wow-delay="400ms">
                    <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-calendar2-check" viewBox="0 0 16 16">
                    <path d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                    </svg>
                    </div>
                    <h6 class="title">Рекордная скорость</h6>
                </div>
                <div class="feature-box wow fadeInUp" data-wow-delay="400ms">
                    <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-heart" viewBox="0 0 16 16">
                    <path d="M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276Z"/>
                    </svg>
                    </div>
                    <h6 class="title">Гражданство для детей</h6>
                </div>
            </div>
        </div>
    </section>
    <!--====== Process Section End ======-->

    <!--====== Price area start ======-->
    <section class="pricing-section section-gap" style="background-image: url(assets/img/pricing-bg.jpg);">
        <div class="container">
            <div class="section-title white-color text-center mb-50 wow fadeInLeft" data-wow-delay="400ms">
                
                <h2 class="title">
                Этапы получения гражданства
                </h2>
            </div>
            <div class="row pricing-boxes  justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="500ms">
                    <div class="pricing-box active-plan">
                        <div class="paln-title">
                            <span>Подготовка Досье</span>
                            
                        </div>
                        <div class="paln-desc">
                            <ul>
                                <li><i class="fal fa-check"></i>Наши специалисты БЕСПЛАТНО проконсультируют Вас, подробно рассказав о предстоящей процедуре, 
                                на основании имеющихся у вас документов. Восстановим недостающие и утерянные бумаги. Подготовим Ваше досье, 
                                переведем на румынский язык и нотариально заверим все необходимые документы.</li>
                                
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="500ms">
                    <div class="pricing-box active-plan">
                        <div class="paln-title">
                            <span>ПОДАЧА ДОКУМЕНТОВ</span>
                            
                        </div>
                        <div class="paln-desc">
                            <ul>
                                <li><i class="fal fa-check"></i>Определив место для подачи документов (Бухарест / Сучава), и оказав помощь в оформлении визы, 
                                мы сопроводим Вас в Министерство юстиции Румынии. От Вас потребуется только личное присутствие – все необходимые действия 
                                будет курировать сопровождающий Вас юрист. Получив подтверждение о том, что ваше досье было принято чиновниками, Вы отправитесь домой, 
                                ждать официального извещения о результатах Вашего дела.</li>
                                
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="500ms">
                    <div class="pricing-box active-plan">
                        <div class="paln-title">
                            <span>ПРИКАЗ</span>
                            
                        </div>
                        <div class="paln-desc">
                            <ul>
                                <li><i class="fal fa-check"></i>Большой поток соискателей стал причиной появления очереди, 
                                из-за чего срок рассмотрения документов составляет 14 – 16 месяцев. По истечению этого времени, 
                                на сайте Министерства юстиции Румынии появится приказ, об официальном решении восстановить Ваше гражданство.
                                 Вслед за ним Вам вышлют дублирующее письмо, пригласив на присягу. Проверить выход приказа Вы сможете прямо на сайте
                                  по персональному номеру.</li>
                                
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="500ms">
                    <div class="pricing-box active-plan">
                        <div class="paln-title">
                            <span>ПРИСЯГА</span>
                            
                        </div>
                        <div class="paln-desc">
                            <ul>
                                <li><i class="fal fa-check"></i>Принятие присяги – процедура, свидетельствующая о Вашей верности новоиспеченной второй родине.
                                 Сдача проходит в Бухаресте, в групповом режиме, или по месту жительства (Санкт-Петербург / Москва / Ростов-на-Дону). Текст присяги,
                                  свою автобиографию, а также правильное произношение, Вы выучите во время ожидания выхода приказа – в этом помогут наши квалифицированные репетиторы.</li>
                                
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="500ms">
                    <div class="pricing-box active-plan">
                        <div class="paln-title">
                            <span>ОФОРМЛЕНИЕ ВНУТРЕННИХ ДОКУМЕНТОВ</span>
                            
                        </div>
                        <div class="paln-desc">
                            <ul>
                                <li><i class="fal fa-check"></i>На основе сертификата об успешном принятии присяги, оформляются все внутренние 
                                документы – аналоги существующих русских, только румынского образца. Оформив свидетельства о рождении и браке, 
                                вы получите долгожданный паспорт, и сможете использовать личные документы как полноправный гражданин ЕС!</li>
                                
                            </ul>
                            
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