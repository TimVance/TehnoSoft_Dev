<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?$isMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;?>
<!DOCTYPE html>
<html>
<head>
    <?
    use Bitrix\Main\Application;
    use Bitrix\Main\Page\Asset;
    use Bitrix\Main\Localization\Loc;
    Loc::loadMessages(__FILE__);
    ?>

    <meta charset="utf-8"/>
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowHead();?>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <?
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/popper.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/bootstrap.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/owl.carousel.min.js');
    ?>
    <?
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/assets/css/bootstrap.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/assets/font-awesome/style/all.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/assets/css/style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/assets/css/owl.carousel.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/assets/css/owl.theme.default.min.css');
    ?>

</head>
<body>
<?$APPLICATION->ShowPanel();?>
<? include "include/header.php"; ?>
