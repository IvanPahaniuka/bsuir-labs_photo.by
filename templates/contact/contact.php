<?php
function get_contact()
{
    $template = file_get_contents(TEMPLATES_ADDR . '/contact/contact.html');
    return $template;
}
