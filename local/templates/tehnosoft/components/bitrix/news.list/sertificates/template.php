<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="container">
    <h2 style="margin: 110px 0 100px 0;"><?=$arResult["NAME"]?></h2>
    <div class="row">
        <div class="owl-carousel owl-theme owl-pagination-bottom owl-dark-pagination docs">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="item col-md-12 col-sm-12 col-xs-12" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <a data-fancybox="gallery" href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>">
                        <img
                                class="preview_picture"
                                border="0"
                                src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                                height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                                alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                        />
                    </a>
                </div>
            <?endforeach;?>
        </div>
    </div>
</div>
