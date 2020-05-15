<?php
require_once TEMPLATES_ADDR . '/common_render.php';

function get_photo_creator($button_text, $action, $photo = null)
{
    $vars = [
        'id' => -1,
        'name' => '',
        'file' => '',
        'date' => date( 'Y-m-d' ),
    ];
    if (isset($photo))
        $vars = [
            'id' => $photo['id'],
            'name' => $photo['name'],
            'file' => '{$IMAGES_ADDR}/' . $photo['source'],
            'date' => $photo['date'],
        ];

    $vars['button_text'] = $button_text;
    $vars['action'] = $action;

    $template = common_render('{photo_creator}', $vars);
    return $template;
}