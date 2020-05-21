<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

$this->setFrameMode(true);?>

<div class="container">
    <div class="row detail-page">
        <div class="col-md-5 col-sm-12">
            <? if(!empty($arResult["DETAIL_PICTURE"]["SRC"])): ?>
                <a data-fancybox="gallery" href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>">
                    <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?= $arResult["NAME"]; ?>">
                </a>
            <? else: ?>
                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/no-photo.png" alt="<?= $arResult["NAME"]; ?>">
            <? endif; ?>
        </div>
        <div class="col-md-7 col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <h1><?= $arResult["NAME"] ?></h1>
                    <div class="description"><?= $arResult["CATEGORY_PATH"] ?></div>
                    <? if(!empty($arResult["PRICES"]["BASE"]["PRINT_VALUE"])): ?>
                        <div class="price"><?= $arResult["PRICES"]["BASE"]["PRINT_VALUE"] ?></div>
                    <? endif; ?>
                    <a class="button-add" href="<? echo $arResult["ADD_URL"] ?>" rel="nofollow">
                        <i class="fas fa-shopping-cart"></i> <span>В корзину</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>