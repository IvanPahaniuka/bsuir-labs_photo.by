<?php
require_once '../globals.php';
require_once TEMPLATES_ADDR . '/page/page.php';
require_once TEMPLATES_ADDR . '/add_photo/add_photo.php';

$content = get_add_photo();

$page = get_page('Контакты', null, $content);
$page = replace_global_variables($page);

echo $page;