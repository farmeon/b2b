<?php
/**
 * Created by PhpStorm.
 * UserController: dimon
 * Date: 12.01.2018
 * Time: 17:15
 */

require_once __DIR__ . '/vendor/composer/autoload_psr4.php';

$user1 = ['name' => 'Ivan', 'text' => 'text Ivan'];
$user2 = ['name' => 'Vasya', 'text' => 'text Vasya'];

$userController = new \b2b\task3\src\controllers\UserController();
$postController = new \b2b\task3\src\controllers\PostController();

//Добавление поста
$postController->addPost($userController->getByName($user1['name']), $user1['text']);
$postController->addPost($userController->getByName($user2['name']), $user2['text']);

//Получение автора статьи
$postController->getAuthor($userController->getByName($user1['name'])->getId());
$postController->getAuthor($userController->getByName($user1['name'])->getId());

//Получение всех статей автора
$getPostsAuthor = $postController->findByAuthor($userController->getByName($user1['name'])->getId());
foreach ($getPostsAuthor as $item1){
    var_dump($item1);
}

//Замена автора статьи
$updateArray = array($user2[0]);
$postController->update($userController->getByName($user1['name'])->getId(), $updateArray);