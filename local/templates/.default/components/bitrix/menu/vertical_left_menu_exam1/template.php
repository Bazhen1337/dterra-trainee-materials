<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
    <?php
        $iconStyle = "bi bi-arrow-right-circle";
        if (isset($arItem['PARAMS']['MENU_ICO'])) {
            $iconStyle = $arItem['PARAMS']['MENU_ICO'];
        }
    ?>

	<?if($arItem["SELECTED"]):?>
		<a href="<?=$arItem["LINK"]?>" class="active"><i class="<?=$iconStyle;?>"></i><span><?=$arItem["TEXT"]?> -
										активный</span></a>
	<?else:?>
    <a href="<?=$arItem["LINK"]?>"><i class="<?=$iconStyle;?>"></i><span><?=$arItem["TEXT"];?></span></a>
	<?endif?>
	
<?endforeach?>

<?endif?>
