<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>

<div class="jumbotron jumdo-head">
    <div class="container">
        <div class="row align-items-center" style="height:100%">
            <div class="col-lg-8 col-md-12">
                <h1>Технософт</h1>
                <p>Ваше <strong>конкурентное</strong> преимущество</p>
            </div>
            <div class="col-lg-4 col-md-12">
                <form class="form" style="
     border: 3px solid rgba(112, 112, 112, 0.1);
     padding: 40px;
     box-shadow: 5px 5px 5px rgba(0,0,0,0.1)">
                    <p>Мы с Вами свяжемся и ответим на любые вопросы</p>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Номер телефона">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Ваш e-email">
                    </div>
                    <button type="submit" class="btn">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row companies">
        <div class="col-12">
            <h2>Наши направления</h2>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 border company">
            <div class="row align-items-center" style="height: 80%">
                <div class="col-12 justify-content-center"><img
                            src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/companies/техэксперт.png" width="80%"></div>
            </div>
            <div class="row align-items-bottom" style="height: 20%">
                <div class="col-12 company-desc">Почему выбирают Техэксперт у нас?</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 border company">
            <div class="row align-items-center" style="height: 80%">
                <div class="col-12 justify-content-center"><img
                            src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/companies/1сфранч.png" width="80%"></div>
            </div>
            <div class="row align-items-bottom" style="height: 20%">
                <div class="col-12 company-desc">Почему выбирают 1С у нас?</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 border company">
            <div class="row align-items-center" style="height: 80%">
                <div class="col-12 justify-content-center"><img
                            src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/companies/сбис.png" width="80%"></div>
            </div>
            <div class="row align-items-bottom" style="height: 20%">
                <div class="col-12 company-desc">Почему выбирают СБИС у нас?</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 border company">
            <div class="row align-items-center" style="height: 80%">
                <div class="col-12 justify-content-center"><img
                            src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/companies/майкрософт.png" width="80%"></div>
            </div>
            <div class="row align-items-bottom" style="height: 20%">
                <div class="col-12 company-desc">Почему выбирают Microsoft у нас?</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 border company">
            <div class="row align-items-center" style="height: 80%">
                <div class="col-12 justify-content-center"><img
                            src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/companies/1сОбучение.png" width="80%"></div>
            </div>
            <div class="row align-items-bottom" style="height: 20%">
                <div class="col-12 company-desc">Почему выбирают онлайн кассы у нас?</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 border company">
            <div class="row align-items-center" style="height: 80%">
                <div class="col-12 justify-content-center"><img
                            src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/companies/каспер.png" width="80%"></div>
            </div>
            <div class="row align-items-bottom" style="height: 20%">
                <div class="col-12 company-desc">Почему выбирают Kaspersky у нас?</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 border company">
            <div class="row align-items-center" style="height: 80%">
                <div class="col-12 justify-content-center"><img
                            src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/companies/флешка.png" width="80%"></div>
            </div>
            <div class="row align-items-bottom" style="height: 20%">
                <div class="col-12 company-desc">Почему выбирают ЭЦП у нас?</div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 border company">
            <div class="row align-items-center" style="height: 80%">
                <div class="col-12 justify-content-center"><img
                            src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/companies/1ссертификат.png" width="80%">
                </div>
            </div>
            <div class="row align-items-bottom" style="height: 20%">
                <div class="col-12 company-desc">Почему обучаются 1С у нас?</div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row align-items-center contact-form">
        <div class="col-lg-7 col-md-12">
            <p>Мы с Вами свяжемся и ответим на любые вопросы</p>
        </div>
        <div class="col-lg-5 col-md-12">
            <form class="form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ваше имя">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Номер телефона">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ваш e-email">
                </div>
                <button type="submit" class="btn">Отправить</button>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <h2 style="margin: 107px 0 106px 0">Почему выбирают нас?</h2>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 advantage">
            <img src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/advantages/tag@2x.png" alt="">
            <h3>Лучшие цены
                <button class="info rounded-pill">info</button>
            </h3>
            <p>Мы предлагаем самое популярное и лучшее программное обеспечение по самым низким ценам</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 advantage">
            <img src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/advantages/icon (2)@2x.png" alt="">
            <h3>Автоматизация</h3>
            <p>Автоматизируют многие - доделываем мы. Огромный опыт автоматизации учета и управления во всех
                отраслях</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 advantage">
            <img src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/advantages/security@2x.png" alt="">
            <h3>Гарантия качества</h3>
            <p>Высокое качество оказываемых услуг, уникальные внедрения и качественное сопровождение выделяет нашу
                компанию от других</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 advantage">
            <img src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/advantages/statistical@2x.png" alt="">
            <h3>Эффективность</h3>
            <p>Практически реализуем решения для более эффективной экономической деятельности Вашего предприятия</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 advantage">
            <img src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/advantages/group@2x.png" alt="">
            <h3>Не стоим на месте</h3>
            <p>Регулярно предлагаем бесплатные семинары от вендоров, с ценными призами. Повышаем квалификацию своих
                специалистов</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 advantage">
            <img src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/advantages/XMLID_2_@2x.png" alt="">
            <h3>Всегда на связи</h3>
            <p>Мы обеспечиваем постоянную связь с клиентами и консультируем по любым вопросам</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 advantage">
            <img src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/advantages/college-graduation@2x.png" alt="">
            <h3>Обучаем
                <button class="info rounded-pill">info</button>
            </h3>
            <p>Являемся центром сертифицированного обучения фирмы "1С"</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 advantage">
            <img src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/advantages/map-marker@2x.png" alt="">
            <h3>Местоположение</h3>
            <p>Мы находимся в самом удобном месте с наличием массы парковочных мест (ост. Планета) перед магазином
                Водолей</p>
        </div>
    </div>
</div>

<div class="jumbotron bg-secondary" style="margin-top: 120px">
    <h1>Каталог</h1>
</div>

<div class="container">
    <h2 style="margin: 110px 0 100px 0;">Наши сертификаты</h2>
    <div class="row">
        <div class="owl-carousel owl-theme owl-pagination-bottom owl-dark-pagination docs">
            <!-- portfolio -->
            <div class="item col-md-12 col-sm-12 col-xs-12">
                <a href="img/docs/1.png" id="tz-bg-69" title=""><img
                            src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/docs/1.png"></a>
            </div>
            <!-- end portfolio -->
            <!-- portfolio -->
            <div class="item col-md-12 col-sm-12 col-xs-12 text-center lightbox-gallery">
                <a href="img/docs/2.png" id="tz-bg-70" title=""><img
                            src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/docs/2.png"></a>
            </div>
            <!-- end portfolio -->
            <!-- portfolio -->
            <div class="item col-md-12 col-sm-12 col-xs-12 text-center lightbox-gallery">
                <a href="img/docs/3.png" id="tz-bg-71" title=""><img
                            src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/docs/3.png"></a>
            </div>
            <!-- end portfolio -->
            <!-- portfolio -->
            <div class="item col-md-12 col-sm-12 col-xs-12 text-center lightbox-gallery">
                <a href="img/docs/4.png" id="tz-bg-72" title=""><img
                            src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/docs/4.png"></a>
            </div>
        </div>
    </div>
</div>


<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>