<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>

<div class="row">
    <? foreach ($arResult["SECTIONS"] as $section): ?>

        <?
        $this->AddEditAction($section['ID'], $section['EDIT_LINK'], $strSectionEdit);
        $this->AddDeleteAction($section['ID'], $section['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
        ?>

        <div class="col-lg-3 col-md-4 col-sm-6 border section-list" id="<? echo $this->GetEditAreaId($section['ID']); ?>">
            <? if(!empty($section["PICTURE"]["SRC"])): ?>
                <a class="section-img-wrapper" href="<?=$section["SECTION_PAGE_URL"]?>">
                    <img src="<?=$section["PICTURE"]["SRC"]?>" alt="<?=$section["NAME"]?>" />
                </a>
            <? endif; ?>
            <a class="section-name" href="<?=$section["SECTION_PAGE_URL"]?>">
                <?=$section["NAME"]?> (<?=$section["ELEMENT_CNT"]?>)
            </a>
        </div>
    <? endforeach; ?>
</div>
