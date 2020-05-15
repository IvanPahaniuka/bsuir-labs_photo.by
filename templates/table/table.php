<?php
require_once TEMPLATES_ADDR . '/common_render.php';
require_once TEMPLATES_ADDR . '/table_header_cell/table_header_cell.php';
require_once TEMPLATES_ADDR . '/table_data_row/table_data_row.php';

function get_table($headers, $datas)
{
    $table_header_cells = '';
    foreach ($headers as $header)
        $table_header_cells .= get_table_header_cell($header);

    $table_rows = '';
    foreach ($datas as $data)
        $table_rows .= get_table_data_row(array_keys($headers), $data);


    $templates = ['table_header_cells' => $table_header_cells,
                  'table_rows' => $table_rows];

    $template = common_render('{table}', null, $templates);
    return $template;
}
