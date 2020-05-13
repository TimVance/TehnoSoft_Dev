<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

$this->setFrameMode(true);
?>

<div class="jumbotron bg-secondary" style="margin-top: 120px">
    <div class="container">
        <h2>Популярные товары</h2>
        <div class="row">
        <? foreach ($arResult["ITEMS"] as $item): ?>
            <div class="col-lg-6 col-md-12 product">
                <div class="row">
                    <div class="col-5">
                        <? if(!empty($item["PREVIEW_PICTURE"]["SRC"])): ?>
                            <img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="<?= $item["NAME"]; ?>">
                        <? else: ?>
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/no-photo.png" alt="<?= $item["NAME"]; ?>">
                        <? endif; ?>
                    </div>
                    <div class="col-7">
                        <h5>
                            <a href="<?= $item["DETAIL_PAGE_URL"] ?>">
                                <?= $item["NAME"]; ?>
                            </a>
                        </h5>
                        <? if (!empty($item["PRICES"]["BASE"]["PRINT_VALUE"])): ?>
                            <div class="price"><?=$item["PRICES"]["BASE"]["PRINT_VALUE"]?></div>
                        <? endif; ?>
                        <a href="<? echo $item["ADD_URL"] ?>" rel="nofollow">В корзину</a>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
        </div>
    </div>
</div>