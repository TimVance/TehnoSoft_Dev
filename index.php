<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>

<div class="jumbotron jumdo-head">
    <div class="container">
        <div class="row align-items-center" style="height:100%">
            <div class="col-lg-8 col-md-12">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include/parts/maincaption.php"
                    )
                );?>
            </div>
            <div class="col-lg-4 col-md-12">
                <?$APPLICATION->IncludeComponent(
                    "altasib:feedback.form",
                    "feedback",
                    Array(
                        "ACTIVE_ELEMENT" => "Y",
                        "ADD_EVENT_FILES" => "N",
                        "ADD_HREF_LINK" => "Y",
                        "ADD_LEAD" => "N",
                        "ALX_LINK_POPUP" => "N",
                        "BBC_MAIL" => "",
                        "CAPTCHA_TYPE" => "default",
                        "CATEGORY_SELECT_NAME" => "Выберите категорию",
                        "CHANGE_CAPTCHA" => "N",
                        "CHECKBOX_TYPE" => "CHECKBOX",
                        "CHECK_ERROR" => "Y",
                        "COLOR_OTHER" => "#009688",
                        "COLOR_SCHEME" => "BRIGHT",
                        "COLOR_THEME" => "",
                        "EVENT_TYPE" => "ALX_FEEDBACK_FORM",
                        "FB_TEXT_NAME" => "",
                        "FB_TEXT_SOURCE" => "PREVIEW_TEXT",
                        "FORM_ID" => "1",
                        "IBLOCK_ID" => "3",
                        "IBLOCK_TYPE" => "altasib_feedback",
                        "INPUT_APPEARENCE" => array("DEFAULT"),
                        "JQUERY_EN" => "N",
                        "LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
                        "LOCAL_REDIRECT_ENABLE" => "N",
                        "MASKED_INPUT_PHONE" => array("PHONE"),
                        "MESSAGE_OK" => "Ваше сообщение было успешно отправлено",
                        "NAME_ELEMENT" => "PHONE",
                        "NOT_CAPTCHA_AUTH" => "Y",
                        "PROPERTY_FIELDS" => array("PHONE","FIO","EMAIL"),
                        "PROPERTY_FIELDS_REQUIRED" => array("PHONE","FIO","EMAIL"),
                        "PROPS_AUTOCOMPLETE_EMAIL" => array("EMAIL"),
                        "PROPS_AUTOCOMPLETE_NAME" => array("FIO"),
                        "PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array("PHONE"),
                        "PROPS_AUTOCOMPLETE_VETO" => "N",
                        "REQUIRED_SECTION" => "N",
                        "SECTION_FIELDS_ENABLE" => "N",
                        "SECTION_MAIL_ALL" => "timvance@ya.ru",
                        "SEND_IMMEDIATE" => "N",
                        "SEND_MAIL" => "N",
                        "SHOW_LINK_TO_SEND_MORE" => "N",
                        "SHOW_MESSAGE_LINK" => "N",
                        "SPEC_CHAR" => "N",
                        "USERMAIL_FROM" => "N",
                        "USER_CONSENT" => "N",
                        "USER_CONSENT_ID" => "1",
                        "USER_CONSENT_INPUT_LABEL" => "Согласие на обработку персональных данных",
                        "USER_CONSENT_IS_CHECKED" => "Y",
                        "USER_CONSENT_IS_LOADED" => "N",
                        "USE_CAPTCHA" => "N",
                        "WIDTH_FORM" => ""
                    )
                );?>
            </div>
        </div>
    </div>
</div>



<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "directions",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("",""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "1",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("",""),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
);?>

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

<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "select",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("",""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "2",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("",""),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
);?>

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