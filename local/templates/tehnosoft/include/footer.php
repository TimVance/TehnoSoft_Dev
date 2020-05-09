<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>

<footer style="margin-top:120px">
    <div class="container forms">
        <div class="row">
            <div class="col-lg-6 col-md-12 subscribe">
                <h4>Подпишитесь на наши новости</h4>
                <form class="form">
                    <div class="form-row">
                        <div class="col-md-9 col-sm-12">
                            <input type="text" class="form-control" placeholder="Ваш e-mail">
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <button type="button">Подписаться</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 our-partners ">
                <h4>Наши партнеры</h4>
                <div class="row">
                    <div class="col-4">
                        <img <?=SITE_TEMPLATE_PATH;?>/assets/img/partners/1.png" alt="">
                    </div>
                    <div class="col-4">
                        <img <?=SITE_TEMPLATE_PATH;?>/assets/img/partners/2.png" alt="">
                    </div>
                    <div class="col-4">
                        <img <?=SITE_TEMPLATE_PATH;?>/assets/img/partners/3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid footer">
        <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "footer",
            array(
                "ALLOW_MULTI_SELECT"    => "N",
                "CHILD_MENU_TYPE"       => "left",
                "DELAY"                 => "N",
                "MAX_LEVEL"             => "2",
                "MENU_CACHE_GET_VARS"   => array(""),
                "MENU_CACHE_TIME"       => "3600",
                "MENU_CACHE_TYPE"       => "A",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE"        => "footer",
                "USE_EXT"               => "Y"
            )
        ); ?>
        <hr color="white">
        <div class="row">
            <div class="col-12 justify-content-center">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include/parts/copyright.php"
                    )
                );?>
            </div>
        </div>
    </div>
</footer>