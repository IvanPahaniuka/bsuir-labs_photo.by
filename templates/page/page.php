<?php
require_once TEMPLATES_ADDR . '/head/head.php';
require_once TEMPLATES_ADDR . '/header/header.php';
require_once TEMPLATES_ADDR . '/footer/footer.php';
require_once TEMPLATES_ADDR . '/content_container/content_container.php';

function get_page($title, $styles, $content)
{
    if ($styles != null && $styles != '')
        $styles = file_get_contents($styles);
    $styles = $styles . file_get_contents(TEMPLATES_ADDR . '/styles/page.html');

    $templates = [
        '{head}'   => get_head($title, $styles),
        '{header}' => get_header(),
        '{footer}' => get_footer(date( 'Y' )),
        '{content_container}' => get_content_container($content),
    ];

    $page_template = file_get_contents(TEMPLATES_ADDR . '/page/page.html');
    foreach ($templates as $key => $value)
        $page_template= str_replace($key, $value, $page_template);

    return $page_template;
}
