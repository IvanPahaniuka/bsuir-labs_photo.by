<?php
require_once TEMPLATES_ADDR . '/common_render.php';

function get_login($err_text)
{
    $template = common_render('{login}', ['err_text' => $err_text]);
    return $template;
}