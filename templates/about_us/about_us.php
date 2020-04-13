<?php
function get_about_us()
{
    $template = file_get_contents(TEMPLATES_ADDR . '/about_us/about_us.html');
    return $template;
}