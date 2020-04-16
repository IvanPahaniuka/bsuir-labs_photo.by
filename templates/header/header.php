<?php
require_once TEMPLATES_ADDR . '/common_render.php';

function get_header()
{
    $template = common_render('{header}');
    return $template;
}
