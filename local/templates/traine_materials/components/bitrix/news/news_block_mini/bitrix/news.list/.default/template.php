<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="news-small">
    <div class="news-small__heading">
        <h2 class="ui-h2 news-small__ui-h2">Новости
        </h2><a href="<?=$arItem["LIST_PAGE_URL"]?>">
            <div class="ui-p1 ui-p1--link text-green">Все новости
            </div></a>
    </div>

    <div class="news-small__content">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
            <a class="news-small__item" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                <div class="ui-p2 news-small__ui-p2 ui-p2--grey80">
                    <?=$arItem["DISPLAY_ACTIVE_FROM"]?>
                </div>
                <div class="ui-p1 news-small__ui-p1">
                    <?=$arItem["NAME"]?>
                </div>
            </a>
        <?endforeach;?>
    </div>
</div>