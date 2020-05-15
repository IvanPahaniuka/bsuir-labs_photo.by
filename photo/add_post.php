<?php
require_once '../templates/globals.php';

session_start();

if (isset($_SESSION['user_id'])) {

    if (isset($_POST['id']) &&
        isset($_POST['name']) &&
        isset($_POST['date'])) {

        $dbh = database_connect();


        $file_name = '';
        if (isset($_FILES['image']) && $_FILES['image']['size'] < 30000000) {
            $ext = get_extension($_FILES['image']['name']);
            $file_name = basename($_FILES['image']['name'], '.' . $ext);
            for ($i = 0; file_exists(IMAGES_ADDR . '/' . $file_name . $i . '.' . $ext); ++$i) ;
            $file_name .= $i . '.' . $ext;

            if (!move_uploaded_file($_FILES['image']['tmp_name'], IMAGES_ADDR . '/' . $file_name)) {
                $file_name = '';
            }
        }

        if ($_POST['id'] == -1) {
            if ($file_name != '') {
                $sql = "INSERT INTO `photos` (`id`, `name`, `source`, `date`) 
                        VALUES (NULL, :name, :source, :date)";
                $sth = $dbh->prepare($sql);
                $rpl = [
                    'name' => $_POST['name'],
                    'source' => $file_name,
                    'date' => $_POST['date'],
                ];

                $sth->execute($rpl);
            }

        } else {
            $sth = $dbh->prepare('SELECT * FROM photos WHERE id=?');
            $sth->execute([$_POST['id']]);
            $photo = $sth->fetch(PDO::FETCH_ASSOC);
            if (isset($photo) && isset($photo['id'])){
                $photo['name'] = $_POST['name'];
                $photo['date'] = $_POST['date'];
                if ($file_name != ''){
                    $source = IMAGES_ADDR . '/' . $photo['source'];
                    if (file_exists($source))
                        unlink($source);

                    $photo['source'] = $file_name;
                }

                $sth = $dbh->prepare(
                    'UPDATE photos 
                             SET name=:name,
                                 source=:source,
                                 date=:date
                             WHERE
                                 id=:id');
                $sth->execute($photo);
            }

        }
    }

    header('Location: index.php');

} else {
    header('HTTP/1.1 403 incorrect user');
}

function get_extension($filename) {
    return end(explode(".", $filename));
}