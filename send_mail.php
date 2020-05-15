<?php
require_once 'templates/globals.php';

if (isset($_POST['message'])) {
    $message = $_POST['message'];
    mail('ivan.poganiuko@gmail.com', 'Контакт', $message,
        'From: photo.byyyyy@gmail.com');
}

header("Location: index.php");
