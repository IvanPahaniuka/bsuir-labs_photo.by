<?php
require_once TEMPLATES_ADDR . '/common_render.php';

function get_gallery_item($name, $file_src)
{
    $template = common_render('{gallery_item}', ['name' => $name, 'file_src' => $file_src]);
    return $template;
}