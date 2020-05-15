<?php
require_once TEMPLATES_ADDR . '/common_render.php';

function get_photo_info($photo)
{
    $vars = [
        'id' => $photo['id'],
        'name' => $photo['name'],
        'src' => '{$IMAGES_ADDR}/' . $photo['source'],
        'date' => $photo['date'],
    ];

    $template = common_render('{photo_info}', $vars);
    return $template;
}