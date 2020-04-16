<?php
require_once TEMPLATES_ADDR . '/common_render.php';

function get_contact()
{
    $template = common_render('{contact}');
    return $template;
}
