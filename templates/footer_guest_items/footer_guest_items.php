<?php
require_once TEMPLATES_ADDR . '/common_render.php';

function get_footer_guest_items()
{
    $template = common_render('{footer_guest_items}');
    return $template;
}