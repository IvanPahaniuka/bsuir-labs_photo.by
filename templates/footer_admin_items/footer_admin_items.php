<?php
require_once TEMPLATES_ADDR . '/common_render.php';

function get_footer_admin_items()
{
    $template = common_render('{footer_admin_items}');
    return $template;
}