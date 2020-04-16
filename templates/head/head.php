<?php
require_once TEMPLATES_ADDR . '/common_render.php';

function get_head($title, $styles)
{
    $template = common_render('{head}', ['title' => $title], ['styles' => $styles]);
    return $template;
}