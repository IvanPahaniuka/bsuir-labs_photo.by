<?php
require_once 'templates/globals.php';
require_once TEMPLATES_ADDR . '/page/page.php';
require_once TEMPLATES_ADDR . '/gallery/gallery.php';

$styles  = file_get_contents(TEMPLATES_ADDR . '/styles/index.html');
$scripts = file_get_contents(TEMPLATES_ADDR . '/scripts/index.html');

$names_arr = ['test1','test2','test3','test4',
              'test3','test4','test2','test1',];
$files_src_arr = ['/test.jpg','/test2.jpg','/test3.jpg','/test4.jpg',
                  '/test3.jpg','/test4.jpg','/test2.jpg','/test.jpg',];
$content = get_gallery($names_arr, $files_src_arr);

$page = get_page('Главная', $content, $styles, $scripts);

echo $page;