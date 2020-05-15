<?php
require_once TEMPLATES_ADDR . '/common_render.php';
require_once TEMPLATES_ADDR . '/hidden_input/hidden_input.php';

function get_form_button($action, $text, $hidden_values = null)
{
    $values = ['action' => $action, 'text' => $text];

    $hidden_inputs = '';
    if (isset($hidden_values)) {
        $names = array_keys($hidden_values);
        foreach ($names as $name)
            $hidden_inputs .= get_hidden_input($name, $hidden_values[$name]);
    }

    $templates = ['hidden_inputs' => $hidden_inputs];
    $template = common_render('{form_button}', $values, $templates);
    return $template;
}