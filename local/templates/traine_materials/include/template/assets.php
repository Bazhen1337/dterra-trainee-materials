<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Page\Asset;

#CSS
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/style.min.css");

#JS
Asset::getInstance()->addJs("https://cdnjs.cloudflare.com/ajax/libs/svg4everybody/2.1.9/svg4everybody.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/vendors.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/scripts.js");
Asset::getInstance()->addString('<script>svg4everybody();</script>');

#META
Asset::getInstance()->addString('<link href="." rel="icon" type="image/x-icon">');
Asset::getInstance()->addString('<link rel="stylesheet" href="css/style.min.css">');