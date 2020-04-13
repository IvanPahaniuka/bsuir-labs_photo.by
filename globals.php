<?php
define('ROOT_ADDR', $_SERVER['DOCUMENT_ROOT']);
define('TEMPLATES_ADDR', ROOT_ADDR . '/templates');
define('STYLES_ADDR', ROOT_ADDR . '/css');
define('IMAGES_ADDR', ROOT_ADDR . '/images');

function replace_global_variables($page)
{
    $global_variables = [
        '{$ROOT_ADDR}'      => '',
        '{$TEMPLATES_ADDR}' => '/templates',
        '{$STYLES_ADDR}'    => '/css',
        '{$IMAGES_ADDR}'    => '/images',
    ];

    foreach ($global_variables as $key => $value)
        $page = str_replace($key, $value, $page);

    return $page;
}