<?php
function get_head($title, $styles)
{
    $head_template = file_get_contents(TEMPLATES_ADDR . '/head/head.html');
    $head_template= str_replace('{styles}', $styles, $head_template);
    $head_template= str_replace('{$title}', $title, $head_template);
    return $head_template;
}