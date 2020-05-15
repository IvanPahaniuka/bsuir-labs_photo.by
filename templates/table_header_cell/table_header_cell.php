<?php
require_once TEMPLATES_ADDR . '/common_render.php';

function get_table_header_cell($text)
{
    $template = common_render('{table_header_cell}', ['text' => $text]);
    return $template;
}