<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?IncludeTemplateLangFile(__FILE__);
global $APPLICATION;
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?=$APPLICATION->showTitle();?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->

    <link type="image/vnd.microsoft.icon" href="<?=SITE_TEMPLATE_PATH;?>/assets/img/favicon.png" rel="icon">
    <link href="<?=SITE_TEMPLATE_PATH;?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/vendor/bootstrap/css/bootstrap.min.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/vendor/bootstrap-icons/bootstrap-icons.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/vendor/aos/aos.css");?>

    <!-- Main CSS File -->
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/main.css");?>

    <!-- Vendor JS Files -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/vendor/bootstrap/js/bootstrap.bundle.min.js");?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/vendor/aos/aos.js");?>

    <!-- Main JS File -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/main.js");?>

    <?$APPLICATION->ShowHead();?>
</head>

<body class="scrolled">
<?=$APPLICATION->ShowPanel();?>

<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="#" class="logo d-flex align-items-center">
            <h1 class="sitename">Компания</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">Пункт 1</a></li>
                <li><a href="#">Пункт 1</a></li>
                <li><a href="#">Пункт 3</a></li>
                <li><a href="#">Пункт 4</a></li>
                <li class="dropdown">
                    <a href="#"><span>Пункт 5 с подменю</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li><a href="#">Пункт 1</a></li>
                        <li class="dropdown"><a href="#"><span>Пункт 2 с подменю</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Пункт 1</a></li>
                                <li><a href="#">Пункт 2</a></li>
                                <li><a href="#">Пункт 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Пункт 2</a></li>
                        <li><a href="#">Пункт 3</a></li>
                        <li><a href="#">Пункт 4</a></li>
                    </ul>
                </li>
                <li><a href="#">Пункт 6</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="container position-relative">
            <h1>Заголовок страницы</h1>
            <p>Короткий текст для страницы под H1</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Раздел 1</a></li>
                    <li><a href="#">Раздел 1.1</a></li>
                    <li class="current">Заголовок страницы</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->
