<?php
require_once 'globals.php';

function common_render($page, $variables_arr = null, $templates_arr = null)
{
    $page = common_render_templates($page, $templates_arr);
    $page = common_render_variables($page, $variables_arr);

    return $page;
}
function common_render_variables($page, $variables_arr = null)
{
    $regex = '/{\$([a-zA-Z_][0-9a-zA-Z_]*)}/';

    $count = preg_match_all($regex, $page, $matches, PREG_PATTERN_ORDER);
    if ($count > 0) {
        $rpl_count = 0;
        for ($i = 0; $i < $count; ++$i) {
            $match = $matches[1][$i];
            if (isset($variables_arr[$match])) {
                $strings[$rpl_count] = $matches[0][$i];
                $replaces[$rpl_count] = common_render_variables($variables_arr[$match], $variables_arr);
                $rpl_count++;
            } elseif (isset(HTML_VARIABLES[$match])) {
                $strings[$rpl_count] = $matches[0][$i];
                $replaces[$rpl_count] = common_render_variables(HTML_VARIABLES[$match], $variables_arr);
                $rpl_count++;
            }
        }

        $page = str_replace($strings, $replaces, $page);
    }

    return $page;
}
function common_render_templates($page, $templates_arr = null)
{
    $regex = '/{([a-zA-Z_][0-9a-zA-Z_]*)}/';

    $count = preg_match_all($regex, $page, $matches, PREG_PATTERN_ORDER);
    if ($count > 0) {
        $rpl_count = 0;
        for ($i = 0; $i < $count; ++$i) {
            $match = $matches[1][$i];
            if (isset($templates_arr[$match])) {
                $strings[$rpl_count] = $matches[0][$i];
                $replaces[$rpl_count] = common_render_templates($templates_arr[$match], $templates_arr);
                $rpl_count++;
            } else {
                $file_src = TEMPLATES_ADDR . '/' . $match . '/' . $match . '.html';
                if (file_exists($file_src)) {
                    $strings[$rpl_count] = $matches[0][$i];
                    $replaces[$rpl_count] = common_render_templates(file_get_contents($file_src), $templates_arr);
                    $rpl_count++;
                }
            }
        }

        $page = str_replace($strings, $replaces, $page);
    }

    return $page;
}