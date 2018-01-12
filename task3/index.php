<?php
/**
 * Created by PhpStorm.
 * User: dimon
 * Date: 12.01.2018
 * Time: 17:15
 */

require_once __DIR__ . '/vendor/autoload.php';


$user1 = new \b2b\task3\classes\User('Ivan');
$user2 = new \b2b\task3\classes\User('Vasya');

$post1 = new \b2b\task3\classes\Post('text Ivan');
$post2 = new \b2b\task3\classes\Post('text Vasya');

$modelPost = new \b2b\task3\models\PostModel();

//Добавление поста
$post1->setAuthor($user1);
$post2->setAuthor($user2);
$modelPost->addPost($post1);
$modelPost->addPost($post2);

//Получение автора статьи
$post1->getAuthor();
$post2->getAuthor();

//Получение всех статей автора
$getPostsAuthor = $modelPost->findByAuthor($user1);
foreach ($getPostsAuthor as $item){
    var_dump($item);
}

//Замена автора статьи
$post1->setAuthor($user2);
$modelPost->addPost($post1);