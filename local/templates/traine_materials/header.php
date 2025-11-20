<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <?$APPLICATION->ShowHead()?>
    <title> <?$APPLICATION->ShowTitle()?></title>
    <? require($_SERVER["DOCUMENT_ROOT"] . SITE_TEMPLATE_PATH . '/include/template/assets.php');?>
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
    <div class="wrapper">
        <? require($_SERVER["DOCUMENT_ROOT"] . SITE_TEMPLATE_PATH . '/include/template/areas/header.php'); ?>
        <main>