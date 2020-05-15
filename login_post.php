<?php
require_once 'templates/globals.php';

session_start();

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $dbh = database_connect();

    $sth = $dbh->prepare("SELECT * FROM users WHERE login=:login");
    $sth->execute(['login' => $login]);
    $users = $sth->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user){
        if (password_verify($password, $user['password']))
        {
            $_SESSION['user_id'] = $user['id'];
            header ("Location: photo/index.php");
            exit();
        }
    }

    $_SESSION['login_error'] = '*Неправильный логин или пароль';
    header ("Location: login.php");
}
else
    header ("Location: login.php");