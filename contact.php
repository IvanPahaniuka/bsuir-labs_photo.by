<?php
require_once 'globals.php';
require_once TEMPLATES_ADDR . '/page/page.php';
require_once TEMPLATES_ADDR . '/contact/contact.php';

$content = get_contact();

$page = get_page('Контакты', null, $content);
$page = replace_global_variables($page);

echo $page;