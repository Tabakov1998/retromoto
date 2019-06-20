<?php get_header();?>
    <!-- Fullscreen Nav -->
    <div class="menu__wrap">
        <div class="menu__inner">
            <div class="morph-shape" data-morph-open="M273,273c0,0-55.8,24-123,24c-78.2,0-123-24-123-24S3,235.3,3,150C3,79.936,27,27,27,27S72,3,150,3 c85,0,123,24,123,24s24,38.43,24,123C297,229.646,273,273,273,273z;M273,273c0,0-55.8-23-123-23c-78.2,0-123,23-123,23s23-37.7,23-123C50,79.936,27,27,27,27s46,23,124,23 c85,0,122-23,122-23s-23,38.43-23,123C250,229.646,273,273,273,273z">
                <svg width="100%" height="100%" viewbox="0 0 300 300" preserveaspectratio="none">
                    <path d="M273,273c0,0-55.8,0-123,0c-78.2,0-123,0-123,0s0-37.7,0-123c0-70.064,0-123,0-123s45,0,123,0 c85,0,123,0,123,0s0,38.43,0,123C273,229.646,273,273,273,273z"></path>
                </svg>
            </div>

            <div class="nav__v1">
                <!-- Menu -->
                <nav class="navbar">
                    <div class="navbar-collapse">
                        <?php wp_nav_menu( array( 'container_class' => 'navbar-collapse', 'menu' => 'Main menu' ) ); ?>

                    </div>
                </nav>
                <!-- /Menu -->

                <footer class="footer footer_nav_bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <ul class="elsewhere list-unstyled list-inline">
                                    <li><a href="https://www.instagram.com/retromoto.kh.ua/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <!-- /Fullscreen Nav -->

    <header class="page__hero jarallax _scroll" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/scooter/pricebg.jpg);">
        <div class="heading_wrap">
            <div data-start="opacity:1; transform[swing]:translateY(0px)" data-500-start="opacity:0; transform[swing]:translateY(100px)">
                <h1 class="title__h1 title_big">Контакты</h1>
            </div>
        </div>
    </header>




    <section class="section mt20" data-bottom="transform[swing]:translateY(4px)" data--800-top="transform[swing]:translateY(-100px)">
        <div class="edge">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 centered">
                        <button class="online-zakaz online-zakaz-btn">Онлайн бронь</button>
                        <br>
                        <br>
                        <p class="section__subtitle _center paragraph_size_20">
                            Наши сотрудники готовы ответить на все Ваши вопросы, связанные с арендой скутеров в Харькове. Обращаем Ваше внимание на возможность получения онлайн консультации - по вашим вопросам.
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- Contacts -->
    <section class="section no_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 features__box _column">
                    <div class="icon__wrap">
                        <i class="icon icon_box icon_size_34 _pull-left fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="description__features">
                        <h6 class="title__h6 text_uppercase">Телефоны</h6>
                        <p>+38 (099) 948-43-41</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 features__box _column">
                    <div class="icon__wrap">
                        <i class="icon icon_box icon_size_34 _pull-left fa fa-building" aria-hidden="true"></i>
                    </div>
                    <div class="description__features">
                        <h6 class="title__h6 text_uppercase">Адрес</h6>
                        <p>г.Харьков, улица Гаршина 5/7.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 features__box _column">
                    <div class="icon__wrap">
                        <i class="icon icon_box icon_size_34 _pull-left fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="description__features">
                        <h6 class="title__h6 text_uppercase">Email</h6>
                        <p>info@retromoto.kh.ua
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.1821007267276!2d36.24241171571543!3d50.007941979416735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0dbf2e6be79%3A0xdd11d4ea62763fac!2z0LLRg9C70LjRhtGPINCT0LDRgNGI0LjQvdCwLCA1LCDQpdCw0YDQutGW0LIsINCl0LDRgNC60ZbQstGB0YzQutCwINC-0LHQu9Cw0YHRgtGMLCA2MTAwMA!5e0!3m2!1sru!2sua!4v1554020918017!5m2!1sru!2sua" width="100%"height="550" frameborder="0" style="border:0" allowfullscreen=""></iframe>
				
                </div>
            </div>
        </div>
    </section>


<?php get_footer();?>