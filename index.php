<?php
require_once 'templates/globals.php';
require_once TEMPLATES_ADDR . '/page/page.php';
require_once TEMPLATES_ADDR . '/gallery/gallery.php';

$styles  = file_get_contents(TEMPLATES_ADDR . '/styles/index.html');

$dbh = database_connect();

$sth = $dbh->prepare("SELECT `name`,`source` FROM `photos` ORDER BY `date` DESC");
$sth->execute();
$photos = $sth->fetchAll(PDO::FETCH_ASSOC);

$names_arr = array_column($photos, 'name');
$files_src_arr = array_column($photos, 'source');
for ($i = 0; $i < count($files_src_arr); ++$i)
    $files_src_arr[$i] = '{$IMAGES_ADDR}/' . $files_src_arr[$i];
$content = get_gallery($names_arr, $files_src_arr);

$page = get_page('Главная', $content, $styles);

echo $page;