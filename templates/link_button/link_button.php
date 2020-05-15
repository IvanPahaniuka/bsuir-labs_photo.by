<?php
require_once TEMPLATES_ADDR . '/common_render.php';

function get_link_button($ref, $content)
{
    $template = common_render('{link_button}', ['ref' => $ref, 'content' => $content]);
    return $template;
}
