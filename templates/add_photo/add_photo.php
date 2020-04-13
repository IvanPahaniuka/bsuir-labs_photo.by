<?php
function get_add_photo()
{
    $template = file_get_contents(TEMPLATES_ADDR . '/add_photo/add_photo.html');
    return $template;
}