<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
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

    <!-- Vendor CSS Files -->
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/vendor/bootstrap/css/bootstrap.min.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/vendor/bootstrap-icons/bootstrap-icons.css");?>

    <!-- Main CSS File -->
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/style.css");?>

    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/main.js")?>

    <? var_dump(file_exists("/local/templates/exam1_type2/assets/js/main.js")); ?>
    <? var_dump(SITE_TEMPLATE_PATH."/assets/js/main.js"); ?>

    <?$APPLICATION->ShowHead();?>
</head>
<?$APPLICATION->ShowPanel();?>
<body>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="dashboard.html" class="logo d-flex align-items-center">
            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Статистика</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <span class="d-none d-md-block dropdown-toggle ps-2">Ivanov</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>Ivanov</h6>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="profile.html">
                            <i class="bi bi-person"></i>
                            <span>Мой профиль</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <div class="col-12 mb-3 mt-3 d-flex justify-content-center">
                            <button
                                    class="btn btn-secondary btn-sm"
                                    type="submit"
                                    name="logout_butt"
                                    value="Выйти"
                            >
                                Выйти
                            </button>
                        </div>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<?$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "horizontal_multilevel111",
    array(
        "ALLOW_MULTI_SELECT" => "Y",
        "CHILD_MENU_TYPE" => "st_second",
        "DELAY" => "N",
        "MAX_LEVEL" => "3",
        "MENU_CACHE_GET_VARS" => array(
        ),
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "N",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "ROOT_MENU_TYPE" => "st_first",
        "USE_EXT" => "N",
        "COMPONENT_TEMPLATE" => "horizontal_multilevel111"
    ),
    false
);?>

<main id="main" class="main">



    <div class="pagetitle mb-4">
        <h1><?=$APPLICATION->ShowTitle();?></h1>
    </div><!-- End Page Title -->

    <section class="section <?=$APPLICATION->ShowProperty("page_css_class")?>">