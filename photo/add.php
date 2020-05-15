<?php
require_once '../templates/globals.php';
require_once TEMPLATES_ADDR . '/page/page.php';
require_once TEMPLATES_ADDR . '/link_button/link_button.php';
require_once TEMPLATES_ADDR . '/photo_creator/photo_creator.php';

session_start();

if (isset($_SESSION['user_id'])) {
    $content = '';

    $content .= get_photo_creator('добавить', 'add_post.php');
    $content .= get_link_button('{$ROOT_ADDR}/photo/index.php', 'назад');

    $styles = file_get_contents(TEMPLATES_ADDR . '/styles/photo_add.html');

    $page = get_page('Добавление фото', $content, $styles);

    echo $page;

} else {
    header('HTTP/1.1 403 incorrect user');
}