<?php
require_once '../templates/globals.php';
require_once TEMPLATES_ADDR . '/page/page.php';
require_once TEMPLATES_ADDR . '/link_button/link_button.php';
require_once TEMPLATES_ADDR . '/photo_creator/photo_creator.php';

session_start();

if (isset($_SESSION['user_id'])) {
    if (isset($_GET['id'])) {

        $content = '';

        $dbh = database_connect();

        $sth = $dbh->prepare("SELECT * FROM `photos` WHERE `id`=:id");
        $sth->execute(['id' => $_GET['id']]);
        $photo = $sth->fetch(PDO::FETCH_ASSOC);

        if (isset($photo) && isset($photo['id'])) {
            $content .= get_photo_creator('изменить', 'add_post.php', $photo);
            $content .= get_link_button('{$ROOT_ADDR}/photo/index.php', 'назад');

            $styles = file_get_contents(TEMPLATES_ADDR . '/styles/photo_add.html');

            $page = get_page('Изменение фото', $content, $styles);

            echo $page;

            exit();
        }
    }

    header('Location: index.php');

} else {
    header('HTTP/1.1 403 incorrect user');
}