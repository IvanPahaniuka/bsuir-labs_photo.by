<?php
define('ROOT_ADDR', $_SERVER['DOCUMENT_ROOT']);
define('TEMPLATES_ADDR', ROOT_ADDR . '/templates');
define('STYLES_ADDR', ROOT_ADDR . '/css');
define('IMAGES_ADDR', ROOT_ADDR . '/images');
define('SCRIPTS_ADDR',ROOT_ADDR . '/scripts');
define('HTML_VARIABLES', [
    'ROOT_ADDR' => '',
    'STYLES_ADDR' => '{$ROOT_ADDR}/css',
    'IMAGES_ADDR' => '{$ROOT_ADDR}/images',
    'SCRIPTS_ADDR' => '{$ROOT_ADDR}/scripts',
    'TEMPLATES_ADDR' => '{$ROOT_ADDR}/templates',
    ]);