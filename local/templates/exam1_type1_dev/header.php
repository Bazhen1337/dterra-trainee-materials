<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?IncludeTemplateLangFile(__FILE__);
global $APPLICATION;
?>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/header.php"?>

    <? if ($APPLICATION->GetCurDir() != "/") { ?>
    <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="container position-relative">
            <h1><?=($APPLICATION->ShowTitle(true));?></h1>
            <p><?=$APPLICATION->ShowProperty("page_text_under_title");?></p>

            <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"bread_dev_exam1", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "bread_dev_exam1"
	),
	false
);?>

        </div>
    </div><!-- End Page Title -->

    <? } ?>
