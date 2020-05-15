<?php
require_once TEMPLATES_ADDR . '/common_render.php';

function get_link($ref, $content)
{
    $template = common_render('{link}', ['ref' => $ref, 'content' => $content]);
    return $template;
}
