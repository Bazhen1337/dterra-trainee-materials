<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>

<? require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/boot.php";?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?=$APPLICATION->showTitle();?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->

    <link type="image/vnd.microsoft.icon" href="<?=DEFAULT_TEMPLATE_PATH;?>/assets/img/favicon.png" rel="icon">
    <link href="<?=DEFAULT_TEMPLATE_PATH;?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <?$APPLICATION->SetAdditionalCSS(DEFAULT_TEMPLATE_PATH."/assets/vendor/bootstrap/css/bootstrap.min.css");?>
    <?$APPLICATION->SetAdditionalCSS(DEFAULT_TEMPLATE_PATH."/assets/vendor/bootstrap-icons/bootstrap-icons.css");?>
    <?$APPLICATION->SetAdditionalCSS(DEFAULT_TEMPLATE_PATH."/assets/vendor/aos/aos.css");?>

    <!-- Main CSS File -->
    <?$APPLICATION->SetAdditionalCSS(DEFAULT_TEMPLATE_PATH."/assets/css/main.css");?>

    <!-- Vendor JS Files -->
    <?$APPLICATION->AddHeadScript(DEFAULT_TEMPLATE_PATH."/assets/vendor/bootstrap/js/bootstrap.bundle.min.js");?>
    <?$APPLICATION->AddHeadScript(DEFAULT_TEMPLATE_PATH."/assets/vendor/aos/aos.js");?>

    <!-- Main JS File -->
    <?$APPLICATION->AddHeadScript(DEFAULT_TEMPLATE_PATH."/assets/js/main.js");?>

    <?$APPLICATION->ShowHead();?>
</head>

<body class="scrolled">
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <h1 class="sitename"><?=getMessage("MAIN_TEXT");?></h1>
        </a>

        <nav id="navmenu" class="navmenu">

            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel_exam1", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "horizontal_multilevel_exam1"
	),
	false
);
            ?>

            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>

<main class="main">
