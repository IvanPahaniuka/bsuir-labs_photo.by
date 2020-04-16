<?php
require_once 'templates/globals.php';
require_once TEMPLATES_ADDR . '/page/page.php';
require_once TEMPLATES_ADDR . '/contact/contact.php';

$content = get_contact();

$page = get_page('Контакты', $content);

echo $page;