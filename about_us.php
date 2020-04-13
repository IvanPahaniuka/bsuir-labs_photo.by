<?php
require_once 'globals.php';
require_once TEMPLATES_ADDR . '/page/page.php';
require_once TEMPLATES_ADDR . '/about_us/about_us.php';

$content = get_about_us();

$page = get_page('Контакты', null, $content);
$page = replace_global_variables($page);

echo $page;