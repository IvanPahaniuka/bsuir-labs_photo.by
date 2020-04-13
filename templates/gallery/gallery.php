<?php
require_once TEMPLATES_ADDR . '/gallery_item/gallery_item.php';

function get_gallery($names_arr, $files_src_arr)
{
    $template = file_get_contents(TEMPLATES_ADDR . '/gallery/gallery.html');
    $items = '';
    for($i = 0; $i < count($names_arr); ++$i)
        $items = $items . get_gallery_item($names_arr[$i], $files_src_arr[$i]);
    $template = str_replace('{items}', $items, $template);

    return $template;
}