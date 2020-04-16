<?php
require_once TEMPLATES_ADDR . '/common_render.php';

function get_about_us()
{
    $template = common_render('{about_us}');
    return $template;
}