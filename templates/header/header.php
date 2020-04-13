<?php
function get_header()
{
    $template = file_get_contents(TEMPLATES_ADDR . '/header/header.html');
    return $template;
}
