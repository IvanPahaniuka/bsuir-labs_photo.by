<?php
function get_gallery_item($name, $file_src)
{
    $template = file_get_contents(TEMPLATES_ADDR . '/gallery_item/gallery_item.html');
    $template= str_replace('{$name}', $name, $template);
    $template= str_replace('{$file_src}', $file_src, $template);

    return $template;
}