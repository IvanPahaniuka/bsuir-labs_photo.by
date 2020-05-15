<?php
require_once 'templates/globals.php';
require_once TEMPLATES_ADDR . '/page/page.php';
require_once TEMPLATES_ADDR . '/contact/contact.php';
require_once TEMPLATES_ADDR . '/contact_sender/contact_sender.php';

$styles  = file_get_contents(TEMPLATES_ADDR . '/styles/contact.html');
$content = get_contact_sender() . get_contact();

$page = get_page('Контакты', $content, $styles);

echo $page;