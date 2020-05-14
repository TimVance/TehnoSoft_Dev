<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
?>

<a href="<?= $arParams['PATH_TO_BASKET'] ?>" class="bx-basket-block">
    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/cart.svg" alt="cart">
    <?
    if (!$compositeStub)
    {
        if ($arParams['SHOW_NUM_PRODUCTS'] == 'Y' && ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y'))
        {
            echo '<div class="count-cart"><span>'.$arResult['NUM_PRODUCTS'].'</span></div>';

            if ($arParams['SHOW_TOTAL_PRICE'] == 'Y')
            {
                ?>
                <span class="summ-cart"><?=$arResult['TOTAL_PRICE']?></span>
                <?
            }
        }
        else {
            echo '<div class="count-cart"><span>'.$arResult['NUM_PRODUCTS'].'</span></div>';
            echo '<span class="empty-cart">Нет товаров</span>';
        }
    }?>
</a>