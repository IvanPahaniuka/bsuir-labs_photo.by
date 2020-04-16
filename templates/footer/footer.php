<?php
require_once TEMPLATES_ADDR . '/common_render.php';

function get_footer($year)
{
    $template = common_render('{footer}', ['year' => $year]);
    return $template;
}