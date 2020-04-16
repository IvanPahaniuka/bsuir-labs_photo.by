<?php
require_once TEMPLATES_ADDR . '/common_render.php';

function get_add_photo()
{
    $template = common_render('{add_photo}');
    return $template;
}