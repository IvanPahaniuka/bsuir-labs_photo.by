<?php
require_once '../templates/globals.php';
require_once TEMPLATES_ADDR . '/common_render.php';

session_start();

if (isset($_SESSION['user_id'])) {
    if (isset($_GET['id'])) {
        $dbh = database_connect();

        $sth = $dbh->prepare("SELECT `source` FROM `photos` WHERE `id`=:id");
        $sth->execute(['id' => $_GET['id']]);
        $source = $sth->fetch(PDO::FETCH_ASSOC);

        $sth = $dbh->prepare("DELETE FROM `photos` WHERE `id`=:id");
        $sth->execute(['id' => $_GET['id']]);


        $source = IMAGES_ADDR . '/' . $source['source'];
        if (file_exists($source))
            unlink($source);
    }

    header('Location: index.php');

} else {
    header('HTTP/1.1 403 incorrect user');
}