<?php
\Bitrix\Main\Loader::includeModule('mycompany.custom');

function my_dump($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}