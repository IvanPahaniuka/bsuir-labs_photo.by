<?php
require_once TEMPLATES_ADDR . '/common_render.php';
require_once TEMPLATES_ADDR . '/head/head.php';
require_once TEMPLATES_ADDR . '/header/header.php';
require_once TEMPLATES_ADDR . '/footer/footer.php';
require_once TEMPLATES_ADDR . '/content_container/content_container.php';

function get_page($title, $content, $styles = '', $scripts = '')
{
    $styles = file_get_contents(TEMPLATES_ADDR . '/styles/page.html') . $styles;

    $templates = [
        'head'   => get_head($title, $styles),
        'header' => get_header(),
        'footer' => get_footer(date( 'Y' )),
        'scripts'=> $scripts,
        'content_container' => get_content_container($content),
    ];
    $template = common_render('{page}', null, $templates);

    return $template;
}
