<?php
/**
 * Created by PhpStorm.
 * UserController: dimon
 * Date: 12.01.2018
 * Time: 16:26
 */

namespace b2b\task3\src\controllers;

use b2b\task3\src\lib\PostInterface;
use b2b\task3\src\models\Post;
use b2b\task3\src\models\User;

class PostController implements PostInterface{

    /**
     * @param  $object $object
     * @param  string $text
     * @return bool
     */
    public function addPost(User $object, $text){
        $model = new Post();
        $model->addPost($object->getId(), $text);
        return true;
    }

    /**
     * @param  int $id
     * @return string
     */
    public function getAuthor($id){
        $model = new Post();
        $nameAuthor = $model->getById($id);
        return $nameAuthor->getAuthor();
    }

    /**
     * @param  int $user_id
     * @return array
     */
    public function findByAuthor($user_id){
        $model = new Post();
        $list = $model->findByAuthor($user_id);
        return $list;
    }

    /**
     * @param  int $post_id
     * @param  array $arParam
     * @return bool
     */
    public function update($post_id, $arParam){
        $model = new Post();
        $list = $model->update($post_id, $arParam);
        return true;
    }

}