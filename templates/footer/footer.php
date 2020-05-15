<?php
require_once TEMPLATES_ADDR . '/common_render.php';
require_once TEMPLATES_ADDR . '/footer_admin_items/footer_admin_items.php';
require_once TEMPLATES_ADDR . '/footer_guest_items/footer_guest_items.php';

session_start();

function get_footer($year)
{
    $templates =
        ['footer_items' => isset($_SESSION['user_id']) ? get_footer_admin_items() : get_footer_guest_items()];


    $template = common_render('{footer}', ['year' => $year], $templates);
    return $template;
}