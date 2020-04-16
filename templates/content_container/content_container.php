<?php
require_once TEMPLATES_ADDR . '/common_render.php';

function get_content_container($content)
{
    $template = common_render('{content_container}', ['content' => $content]);
    return $template;
}