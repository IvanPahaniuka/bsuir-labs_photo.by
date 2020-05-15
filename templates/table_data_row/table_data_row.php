<?php
require_once TEMPLATES_ADDR . '/common_render.php';
require_once TEMPLATES_ADDR . '/table_data_cell/table_data_cell.php';

function get_table_data_row($headers, $data)
{
    $cells = '';
    foreach ($headers as $header)
        $cells .=  get_table_data_cell(isset($data[$header]) ? $data[$header] : '');

    $templates = ['table_data_cells' => $cells];

    $template = common_render('{table_data_row}', null, $templates);
    return $template;
}