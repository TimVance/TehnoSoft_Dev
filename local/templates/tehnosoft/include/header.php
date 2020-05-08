<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>

<header class="header">
    <div class="container-fluid top-menu">
        <div class="container">
            <div class="row">
                <div class="col-auto d-none d-sm-block" style="margin-right: 0; padding: 0">
                    <p>email: <span>tehnosoft@mail.ru</span></p>
                </div>
                <div class="col-auto d-none d-lg-block" style="margin-left: 28px; padding: 0">
                    <p>Пн - Сб c 09:00 до 18:00</p>
                </div>
                <div class="col d-none d-sm-block"></div>
                <div class="col-auto">
                    <p class="top-right-items" style="margin-top: 14.5px;"><span><i class="fas fa-phone-alt"></i></span>8
                        (391) 222-222 0</p>
                </div>
                <div class="col-auto">
                    <p class="top-right-items">2-8-00000</p>
                </div>
                <div class="col-auto">
                    <p class="top-right-items">2-78-1111</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="padding: 0;">
        <nav class="navbar navbar-expand-lg navbar-light bottom-nav" style="padding: 0;">
            <a class="navbar-brand" href="index.html"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/header/logo.png" alt="">
                ТехноСофт
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "2",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "Y"
                    )
                );?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="catalog.html" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Каталог
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="catalog.html">Антивирус Касперского</a>
                            <a class="dropdown-item" href="#">Антивирус Др Веб</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Новости</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Прайс-лист</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Помощь</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                    </li>
                </ul>
                <span class="navbar-text">
            <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/header/profile.png" alt=""></a>
            <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/header/cart.png" alt=""></a>
            <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/header/compare.png" alt=""></a>
          </span>
            </div>
        </nav>
    </div>
</header>