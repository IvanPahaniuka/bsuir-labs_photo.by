<?php
function get_footer($year)
{
    $footer_template = file_get_contents(TEMPLATES_ADDR . '/footer/footer.html');
    $footer_template= str_replace('{$year}', $year, $footer_template);
    return $footer_template;
}