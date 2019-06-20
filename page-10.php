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
    <!-- Hero -->
    <header class="page__hero jarallax _scroll" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/scooter/otzivbg.jpg)">
        <div class="heading_wrap">
            <div data-start="opacity:1; transform[swing]:translateY(0px)" data-500-start="opacity:0; transform[swing]:translateY(100px)">
                <h1 class="title__h1 title_big">Отзывы</h1>
            </div>
        </div>
    </header>

    <!-- Blog Single -->
    <section class="section blog__single">

        <div class="container">
            <div class="row">
                <div class="col-md-12 centered">
                    <a href="upload\493F6593-4245-4AB4-9243-1035BDD547CA.jpg" class="fancybox" rel="gallery">
                        <div class="otzivimg-inline" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/upload/493F6593-4245-4AB4-9243-1035BDD547CA.jpg');"></div>
                    </a>
                    <a href="upload\0D8A5F9A-79B8-4508-915A-DD21E63A991D.jpg" class="fancybox" rel="gallery">
                        <div class="otzivimg-inline" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/upload/0D8A5F9A-79B8-4508-915A-DD21E63A991D.jpg');"></div>
                    </a>
                    <a href="upload\3A03E6AC-6392-41F0-9652-32F5BEA03C82.jpg" class="fancybox" rel="gallery">
                        <div class="otzivimg-inline" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/upload/3A03E6AC-6392-41F0-9652-32F5BEA03C82.jpg');"></div>
                    </a>
                    <a href="upload\E8E92D96-09C2-4797-A757-19504C0FEFC4.jpg" class="fancybox" rel="gallery">
                        <div class="otzivimg-inline" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/upload/E8E92D96-09C2-4797-A757-19504C0FEFC4.jpg');"></div>
                    </a>
                    <a href="upload\otziv1.jpg" class="fancybox" rel="gallery">
                        <div class="otzivimg-inline" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/upload/otziv1.jpg');"></div>
                    </a>
                    <a href="upload\otziv2.jpg" class="fancybox" rel="gallery">
                        <div class="otzivimg-inline" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/upload/otziv2.jpg');"></div>
                    </a>
                    <a href="upload\otziv3.jpg" class="fancybox" rel="gallery">
                        <div class="otzivimg-inline" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/upload/otziv3.jpg');"></div>
                    </a>
                    <a href="upload\otziv4.jpg" class="fancybox" rel="gallery">
                        <div class="otzivimg-inline" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/upload/otziv4.jpg');"></div>
                    </a>
                    <a href="upload\otziv5.jpg" class="fancybox" rel="gallery">
                        <div class="otzivimg-inline" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/upload/otziv5.jpg');"></div>
                    </a>
                    <a href="upload\otziv6.jpg" class="fancybox" rel="gallery">
                        <div class="otzivimg-inline" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/upload/otziv6.jpg');"></div>
                    </a>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-12 centered">
                    <div id="disqus_thread"></div>
                    <script>
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://scootee-com-ua.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-2 ">
                    <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/upload\13.jpg" class="fancybox" rel="gallery">
                        <div class="otzivimg" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/upload/13.jpg');"></div>
                    </a>
                </div>
                <div class="col-sm-10">
                    <p class="centeredmob">
                        <b>Александр Голуб</b>
                    </p>
                    <blockquote class="otziv">
                        Брал коричневую Хонду!)) очень крутой!                    </blockquote>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-2 ">
                    <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/upload\14.jpg" class="fancybox" rel="gallery">
                        <div class="otzivimg" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/upload/14.jpg');"></div>
                    </a>
                </div>
                <div class="col-sm-10">
                    <p class="centeredmob">
                        <b>Василий Ласый</b>
                    </p>
                    <blockquote class="otziv">
                        Отличное состояние и крутой выбор мопедов , остался очень доволен )                    </blockquote>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-2 ">
                    <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/upload\15.jpg" class="fancybox" rel="gallery">
                        <div class="otzivimg" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/upload/15.jpg');"></div>
                    </a>
                </div>
                <div class="col-sm-10">
                    <p class="centeredmob">
                        <b>Юрий Лащинский</b>
                    </p>
                    <blockquote class="otziv">
                        Хорошие скутера, отличный сервис, всем советую                    </blockquote>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-2 ">
                    <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/upload\16.jpg" class="fancybox" rel="gallery">
                        <div class="otzivimg" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/upload/16.jpg');"></div>
                    </a>
                </div>
                <div class="col-sm-10">
                    <p class="centeredmob">
                        <b>Вадик Бедрин</b>
                    </p>
                    <blockquote class="otziv">
                        Беру не первый раз,качество пушка ,аппаратом доволен, настоятельно рекомендую ) Следующая поездка 5я!) БЕСПЛАТНАЯ                    </blockquote>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-2 ">
                    <div class="otzivimg" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/otzivi/nophoto.png');"></div>
                </div>
                <div class="col-sm-10">
                    <p class="centeredmob">
                        <b>Nazar Danilenko</b>
                    </p>
                    <blockquote class="otziv">
                        Советую этот прокат четкие жорики резвые. Но один минус так же есть куда без них. Указывайте в договоре что за мойку мопеда нужно платить и в то время когда на улице дождь. А так все отлично и круто ... будем еще брать                    </blockquote>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-2 ">
                    <div class="otzivimg" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/otzivi/nophoto.png');"></div>
                </div>
                <div class="col-sm-10">
                    <p class="centeredmob">
                        <b>Влад Шатоник</b>
                    </p>
                    <blockquote class="otziv">
                        Вообщем мне все понравилось, особых претензий нету, очень отзывчивый человек с нами общался, все вопросы решает "как надо" впринципе, за отношение к клиентам в плане общения 5+ )) Скутеры прикольно выглядят сами по себе, присутствовали царапины на нем конечно и тд, но как по мне это не так важно, тем более что над этим постоянно работают и пытаются устранить всевозможные проблемы, по крайней мере мне так показалось. Цены вполне устроили, единственное что по ценам, так это в группе написаны старые цены, и когда позвонил только сказали что чуток поднялись, исправьте, ребят, эт не круто, а так то все ок, прайсы по сравнению с другими прокатами довольно приемлемые. Возможно заскочу к вам еще разок как-нибудь!)                    </blockquote>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-2 ">
                    <div class="otzivimg" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/otzivi/nophoto.png');"></div>
                </div>
                <div class="col-sm-10">
                    <p class="centeredmob">
                        <b>Артур Корнеевец</b>
                    </p>
                    <blockquote class="otziv">
                        Всё было очень круто: начиная от чая (чувствуется сервис =)) , заканчивая ездой на скутерах ( даже в плохую погоду) =) Всё пучком ! Спасибо Александру ! Обязательно приедем еще !                    </blockquote>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-2 ">
                    <div class="otzivimg" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/otzivi/nophoto.png');"></div>
                </div>
                <div class="col-sm-10">
                    <p class="centeredmob">
                        <b>Влад Амонов</b>
                    </p>
                    <blockquote class="otziv">
                        Все было очень круто..мопеды летают) обслуживание на высшем уровне. Буду брать ещё ..возьму друзей.                    </blockquote>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-2 ">
                    <div class="otzivimg" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/otzivi/nophoto.png');"></div>
                </div>
                <div class="col-sm-10">
                    <p class="centeredmob">
                        <b>Даша Желавская</b>
                    </p>
                    <blockquote class="otziv">
                        Не успели написать-сразу получили ответ) Мопед хороший, катались вместе Все понравилось. Будем приходить ещё!
                    </blockquote>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-2 ">
                    <div class="otzivimg" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/otzivi/nophoto.png');"></div>
                </div>
                <div class="col-sm-10">
                    <p class="centeredmob">
                        <b>Mihail Obrazenko</b>
                    </p>
                    <blockquote class="otziv">
                        Благодарен персоналу проката за отлично проведенный день. Скутеры - огонь! Эмоций хватит на неделю ))                    </blockquote>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-sm-2 ">
                    <div class="otzivimg" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/otzivi/nophoto.png');"></div>
                </div>
                <div class="col-sm-10">
                    <p class="centeredmob">
                        <b>Владимир Плохинов</b>
                    </p>
                    <blockquote class="otziv">
                        Это прокат для тех, кто предпочитает отличный сервис и идеальное состояние мопедов! Все предельно честно и открыто. Горячо советую!                    </blockquote>
                </div>
            </div>
            <hr>


        </div>

    </section>



<?php get_footer();?>