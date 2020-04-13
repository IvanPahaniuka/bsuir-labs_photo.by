<?php
require_once 'globals.php';
require_once TEMPLATES_ADDR . '/page/page.php';
require_once TEMPLATES_ADDR . '/gallery/gallery.php';

$styles = TEMPLATES_ADDR . '/styles/index.html';

$names_arr = ['test','test','test','test',];
$files_src_arr = ['/test.jpg','/test.jpg','/test.jpg','/test.jpg',];
$content = get_gallery($names_arr, $files_src_arr);

$page = get_page('Главная', $styles, $content);
$page = replace_global_variables($page);

echo $page;