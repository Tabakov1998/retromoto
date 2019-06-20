<?php get_header();?>

    <!-- /Fullscreen Nav -->
    <header class="page__hero jarallax _scroll" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/scooter/scooterbg2.jpg);">
        <div class="heading_wrap">
            <div data-start="opacity:1; transform[swing]:translateY(0px)" data-500-start="opacity:0; transform[swing]:translateY(100px)">
                <h1 class="title__h1 title_big">Цены</h1>
            </div>
        </div>
    </header>


    <section class="section blog__single">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="title">Дополнительные условия:</h3>
                    <ul>
                        <li>Выезд за город запрещен</li>
                        <li>На одного человека выдается один скутер</li>
                        <li>При себе иметь гражданский паспорт для удостоверения личности и подписания договора аренды</li>
                        <li>Полный бак не входит в стоимость аренды</li>
                        <li>Второй шлем, камера GoPro, доставка – оплачиваются отдельно</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img\scooter\prices.jpg" class="img-responsive imgrounded">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12 centered">
                    <h3 class="title title__h3">Цены на аренду скутеров:</h3>
                    <p>
                        <span style="color:red;">*</span>В день рождения - скидка 20%</p>
                    <p>
                        <span style="color:red;">*</span>Каждая 7-я поездка - бесплатно</p>

                    <button class="online-zakaz online-zakaz-btn">Онлайн бронь</button><br><br>
                </div>
               
                <div class="col-sm-6  prices_spisok">
                    <img src="http://www.retromoto.kh.ua/wp-content/uploads/2019/03/yamaha-vino-4t-1-e1552986572664.jpg" alt="Honda Giorno">
                    <p class="pricenazva">Yamaha Vino</p>
                    <p class="priceonehour">1 час: 200 грн</p>
                    <p class="priceotherhours">
                        <b>3 часа:</b> 300 грн</p>
                    <p class="priceotherhours">
						 <b>День или ночь</b> 500 грн</p>
                        
                    <p class="priceotherhours">
                        <b>Сутки:</b> 700 грн</p>
                </div>

                <div class="col-sm-6 prices_spisok">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img\scooter\gopro.jpg" alt="Honda Giorno">
                    <p class="pricenazva">Аренда GoPro</p>
                    <p class="priceotherhours">
                        <b>3 часа:</b> 100 грн</p>
                    <p class="priceotherhours">
                        <b>6 часов:</b> 150 грн</p>
                    <p class="priceotherhours">
                        
                    <p class="priceotherhours">
                        <b>Сутки:</b> 250 грн</p>
                </div>

            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <!--<p class="font18 red centered bold">*В выходные и праздничные дни к цене добавляется 50 гривен</p>-->
                    <p class="font18">
                        <b>Доставить и забрать скутер</b> - стоимость зависит от расстояния.</p>
                    <p class="font18">
                        <b>У нас вы можете приобрести сертификат аренды на день или ночь</b> (Стоимость сертификата составляет: стоимость аренды + 50 гривен).</p>
                </div>
                <div class="col-md-6 col-md-offset-3">

                    <h3 class="title">Залог:</h3>
                    <p>Копия паспорта + 1000 гривен (или же полная стоимость скутера в долларах)</p>
                    <p>
                        <span style="color:red;">*</span> залог возвращается в полном размере по окончанию аренды (или же же если вы повреждаете скутер то сумма за поврежденные элементы отнимается от залога )</p>
                </div>
            </div>
        </div>
    </section>
    


<?php get_footer();?>