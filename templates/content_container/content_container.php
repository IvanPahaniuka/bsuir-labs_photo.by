<?php
function get_content_container($content)
{
    $container_template = file_get_contents(TEMPLATES_ADDR . '/content_container/content_container.html');
    $container_template= str_replace('{$content}', $content, $container_template);
    return $container_template;
}