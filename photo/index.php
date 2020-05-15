<?php
require_once '../templates/globals.php';
require_once TEMPLATES_ADDR . '/page/page.php';
require_once TEMPLATES_ADDR . '/table/table.php';
require_once TEMPLATES_ADDR . '/link_button/link_button.php';
require_once TEMPLATES_ADDR . '/link/link.php';

session_start();

if (isset($_SESSION['user_id'])) {
    $content = '';

    $content .= get_link_button('{$ROOT_ADDR}/photo/add.php', 'добавить');

    $dbh = database_connect();

    $sth = $dbh->prepare("SELECT * FROM `photos` ORDER BY `date` DESC");
    $sth->execute();
    $photos = $sth->fetchAll(PDO::FETCH_ASSOC);

    $table = '';
    if (isset($photos[0])) {
        $headers = [
            'id' => 'id',
            'name' => 'Название',
            'source' => 'Фото',
            'date' => 'Дата',
            'more' => 'Подробнее',
            'change' => 'Изменить',
            'delete' => 'Удалить'
        ];

        for ($i = 0; $i < count($photos); ++$i)
        {
            $var = '?id=' . $photos[$i]['id'];
            $photos[$i]['more'] = get_link('{$ROOT_ADDR}/photo/info.php' . $var, 'Подробнее');
            $photos[$i]['change'] = get_link('{$ROOT_ADDR}/photo/change.php' . $var, 'Изменить');
            $photos[$i]['delete'] = get_link('{$ROOT_ADDR}/photo/delete.php' . $var, 'Удалить');
        }
        $table = get_table($headers, $photos);
    }
    $content .= $table;

    $styles = file_get_contents(TEMPLATES_ADDR . '/styles/photo.html');

    $page = get_page('Список фото', $content, $styles);

    echo $page;

} else {
    header('HTTP/1.1 403 incorrect user');
}