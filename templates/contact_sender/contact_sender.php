<?php
require_once TEMPLATES_ADDR . '/common_render.php';

function get_contact_sender()
{
    $template = common_render('{contact_sender}');
    return $template;
}
