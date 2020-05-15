<?php
require_once TEMPLATES_ADDR . '/common_render.php';

function get_hidden_input($name, $value)
{
    $values = ['name' => $name, 'value' => $value];
    $template = common_render('{hidden_input}', $values);
    return $template;
}