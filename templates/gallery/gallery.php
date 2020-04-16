<?php
require_once TEMPLATES_ADDR . '/common_render.php';
require_once TEMPLATES_ADDR . '/gallery_item/gallery_item.php';

function get_gallery($names_arr, $files_src_arr)
{
    $items = '';
    for($i = 0; $i < count($names_arr); ++$i)
        $items = $items . get_gallery_item($names_arr[$i], $files_src_arr[$i]);

    $template = common_render('{gallery}', null, ['gallery_items' => $items]);

    return $template;
}