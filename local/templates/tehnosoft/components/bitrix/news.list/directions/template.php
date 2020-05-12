<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>


<div class="container">
    <div class="row companies">
        <div class="col-12"><h2><?=$arResult["NAME"]?></h2></div>
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="col-lg-3 col-md-6 col-sm-12 border company" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="row align-items-center" style="height: 80%">
                    <div class="col-12 justify-content-center">
                        <?
                            if(!empty($arItem["DISPLAY_PROPERTIES"]["link"]["VALUE"]))
                                echo '<a href="'.$arItem["DISPLAY_PROPERTIES"]["link"]["VALUE"].'">';
                        ?>
                        <img
                            class="preview_picture"
                            border="0"
                            src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                            width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                            height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                            alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                            title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                        />
                        <?
                            if(!empty($arItem["DISPLAY_PROPERTIES"]["link"]["VALUE"]))
                                echo '</a>';
                        ?>
                    </div>
                </div>
                <div class="row align-items-bottom" style="height: 20%">
                    <?
                    if(!empty($arItem["DISPLAY_PROPERTIES"]["link"]["VALUE"]))
                        echo '<a href="'.$arItem["DISPLAY_PROPERTIES"]["link"]["VALUE"].'">';
                    ?>
                    <div class="col-12 company-desc"><?echo $arItem["NAME"]?></div>
                    <?
                        if(!empty($arItem["DISPLAY_PROPERTIES"]["link"]["VALUE"]))
                            echo '</a>';
                    ?>
                </div>
            </div>
        <?endforeach;?>
    </div>
</div>
