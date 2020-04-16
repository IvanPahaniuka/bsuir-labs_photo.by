<?php
require_once 'templates/globals.php';
require_once TEMPLATES_ADDR . '/page/page.php';
require_once TEMPLATES_ADDR . '/about_us/about_us.php';

$content = get_about_us();

$page = get_page('О нас', $content);

echo $page;