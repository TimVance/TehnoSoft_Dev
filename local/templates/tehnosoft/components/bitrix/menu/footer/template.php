<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<div class="row align-items-end" style="height: 90px;">
    <div class="col"></div>

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
    <div class="col-auto">
        <a href="<?=$arItem["LINK"]?>" class="<?=(!empty($arItem["SELECTED"] ? "selected" : ""))?>">
            <?=$arItem["TEXT"]?>
        </a>
    </div>
	
<?endforeach?>

    <div class="col"></div>

</div>

<?endif?>