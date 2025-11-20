<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <?

$previousLevel = 0;
foreach($arResult as $arItem):?>
    <?
    $icon_class = "";
    if ($arItem["PARAMS"]["menu_ico"]) {
        $icon_class = $arItem["PARAMS"]["menu_ico"];
    }
    ?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>

            <?
            $collapse_id = "";
            if ($arItem["PARAMS"]["collapse_id"]) {
                $collapse_id = $arItem["PARAMS"]["collapse_id"];
            }


            ?>

            <li class="nav-item">
			    <a href="<?=$arItem["LINK"]?>" class="nav-link collapsed" data-bs-target="#<?=$collapse_id?>" data-bs-toggle="collapse">
                    <i class="bi <?=$icon_class?>"></i><span><?=$arItem["TEXT"]?></span><i class="bi bi-chevron-down ms-auto"></i>
                </a>

				<ul id="<?=$collapse_id?>" class="nav-content collapse " data-bs-parent="#sidebar-nav">
		<?else:?>
			<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
				<ul>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="nav-item">
                    <a class="nav-link" href="<?=$arItem["LINK"]?>">
                        <i class="bi <?=$icon_class?>"></i>
                        <span><?=$arItem["TEXT"]?></span>
                    </a>
                </li>
			<?else:?>
                <li>
                    <a href="<?=$arItem["LINK"]?>">
                        <i class="bi bi-circle"></i><span><?=$arItem["TEXT"]?></span>
                    </a>
                </li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

        </ul>

</aside><!-- End Sidebar-->
<div class="menu-clear-left"></div>