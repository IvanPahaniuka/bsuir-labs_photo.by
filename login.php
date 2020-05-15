<?php
require_once 'templates/globals.php';
require_once TEMPLATES_ADDR . '/page/page.php';
require_once TEMPLATES_ADDR . '/login/login.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    if (isset($_SESSION['login_error'])) {
        $err = $_SESSION['login_error'];
        unset($_SESSION['login_error']);
    } else
        $err = '';


    $styles = file_get_contents(TEMPLATES_ADDR . '/styles/login.html');
    $content = get_login($err);

    $page = get_page('Вход', $content, $styles);

    echo $page;
} else {
    header ("Location: photo/index.php");
}