<?php

/**
 * Вынесем конфигурацию в начало файла.
 */

$db_server = "localhost";
$db_name = "b2b";
$db_user = "root";
$db_password = "";

/**
 * Подключаемся к БД
 * @param string $db_server
 * @param string $db_name
 * @param int $db_user
 * @param mixed $db_password
 * @return mixed
 */
function load_users_data($db_server, $db_name, $db_user, $db_password){

    $dsn = "mysql:host=$db_server; dbname=$db_name; charset=utf8";
    $opt = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    );

    // Проверка корректности подключения
    try {
        $pdo = new PDO($dsn, $db_user, $db_password, $opt);
        $data = getUsers($_GET['users'], $pdo);
        return $data;
        // Закрываем соединение
        $pdo = NULL;
    } catch (PDOException $e){
        die('Подключение не удалось: ' . $e->getMessage());
    }
}

/**
 * Выборка из БД
 * @param string $users
 * @param PDO $pdo
 * @return array
 */
function getUsers($users, $pdo){
    $data = array();
    $users_id = explode(',', $users);

    //Возврат, если массив пуст
    if (count($users_id) < 1) return $data;

    //Выборка из БД
    $sql = $pdo->prepare("SELECT * FROM users WHERE id IN ($users)");
    $sql->execute($users_id);
    while ($row = $sql->fetchObject()) {
        $data[$row->id] = $row->name;
    }
    return $data;
}

$_GET['users'] = '1,2,17,48';
$data = load_users_data($db_server, $db_name, $db_user, $db_password);
foreach ($data as $user_id => $name) {
    echo "<a href=\"/show_user.php?id=$user_id\">$name</a><br/>";
}
