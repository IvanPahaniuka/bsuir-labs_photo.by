<?php
require_once '../templates/globals.php';
require_once TEMPLATES_ADDR . '/page/page.php';
require_once TEMPLATES_ADDR . '/add_photo/add_photo.php';

$content = get_add_photo();

$page = get_page('Добавить фото', $content);

echo $page;