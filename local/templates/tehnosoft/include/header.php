<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<header class="header">
    <div class="container-fluid top-menu">
        <div class="container">
            <div class="row">
                <div class="col-auto d-none d-sm-block" style="margin-right: 0; padding: 0">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/include/parts/email.php"
                        )
                    );?>
                </div>
                <div class="col-auto d-none d-lg-block" style="margin-left: 28px; padding: 0">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/include/parts/worktime.php"
                        )
                    );?>
                </div>
                <div class="col d-none d-sm-block"></div>
                <div class="col-auto">
                    <div class="top-right-items" style="margin-top: 14.5px;">
                        <span><i class="fas fa-phone-alt"></i></span>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_TEMPLATE_PATH."/include/parts/phone.php"
                            )
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="padding: 0;">
        <nav class="navbar navbar-expand-lg navbar-light bottom-nav" style="padding: 0;">
            <a class="navbar-brand" href="/">
                <img src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/header/logo.png" alt=""> ТехноСофт
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "main",
                    array(
                        "ALLOW_MULTI_SELECT"    => "N",
                        "CHILD_MENU_TYPE"       => "left",
                        "DELAY"                 => "N",
                        "MAX_LEVEL"             => "2",
                        "MENU_CACHE_GET_VARS"   => array(""),
                        "MENU_CACHE_TIME"       => "3600",
                        "MENU_CACHE_TYPE"       => "A",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE"        => "top",
                        "USE_EXT"               => "Y"
                    )
                ); ?>
                <span class="navbar-text">
                    <a href="#"><img src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/header/profile.png" alt=""></a>
                    <a href="#"><img src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/header/cart.png" alt=""></a>
                    <a href="#"><img src="<?= SITE_TEMPLATE_PATH; ?>/assets/img/header/compare.png" alt=""></a>
                </span>
            </div>
        </nav>
    </div>
</header>