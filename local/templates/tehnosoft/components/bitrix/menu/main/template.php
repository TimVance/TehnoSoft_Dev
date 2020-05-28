<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="navbar-nav mr-auto">

<?

$previousLevel = 0;
foreach($arResult as $arItem):?>

<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
<?endif?>

<?if ($arItem["IS_PARENT"]):?>

<?if ($arItem["DEPTH_LEVEL"] == 1):?>
<li class="<? if($arItem["IS_PARENT"]) echo 'parent'; ?> nav-item">
    <?if ($arItem["SELECTED"]):?>
        <span class="nav-link <?if ($arItem["SELECTED"]):?>selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></span>
    <? else: ?>
        <a href="<?=$arItem["LINK"]?>" class="nav-link <?if ($arItem["SELECTED"]):?>selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a>
    <? endif; ?>
<ul class="inner-nav">
<?else:?>
<li<?if ($arItem["SELECTED"]):?> class="<? if($arItem["IS_PARENT"]) echo 'parent'; ?> nav-item selected" <? else: ?> class="nav-item" <?endif?>>
    <?if ($arItem["SELECTED"]):?>
        <span class="nav-link parent selected"><?=$arItem["TEXT"] ?></span>
    <? else: ?>
        <a href="<?=$arItem["LINK"]?>" class=" nav-link parent"><?=$arItem["TEXT"]?></a>
    <? endif; ?>
<ul class="inner-nav">
    <?endif?>

    <?else:?>

        <?if ($arItem["PERMISSION"] > "D"):?>

            <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li class="nav-item">
                    <?if ($arItem["SELECTED"]):?>
                        <span class="nav-link <?if ($arItem["SELECTED"]):?>selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></span>
                    <? else: ?>
                        <a href="<?=$arItem["LINK"]?>" class="nav-link <?if ($arItem["SELECTED"]):?>selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a>
                    <? endif; ?>
                </li>
            <?else:?>
                <li<?if ($arItem["SELECTED"]):?> class="nav-item selected" <? else: ?> class="nav-item" <?endif?>>
                    <?if ($arItem["SELECTED"]):?>
                        <span class="nav-link selected" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></span>
                    <? else: ?>
                        <a class="nav-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                    <? endif; ?>
                </li>
            <?endif?>

        <?else:?>

            <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li class="nav-item">
                    <?if ($arItem["SELECTED"]):?>
                        <span class="<?if ($arItem["SELECTED"]):?>selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></span>
                    <? else: ?>
                        <a href="" class="<?if ($arItem["SELECTED"]):?>selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a>
                    <? endif; ?>
                </li>
            <?else:?>
                <li class="nav-item"><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
            <?endif?>

        <?endif?>

    <?endif?>

    <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

    <?endforeach?>

    <?if ($previousLevel > 1)://close last item tags?>
        <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
    <?endif?>

</ul>
<?endif?>
