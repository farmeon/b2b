<?php
/**
 * Created by PhpStorm.
 * User: dimon
 * Date: 12.01.2018
 * Time: 17:55
 */

namespace b2b\task3\models;


use b2b\task3\classes\Post;
use b2b\task3\classes\User;

class PostModel{

    /**
     * @param object post $post
     * @return bool
     */
    public function addPost(Post $post){
        // add query in DB
        return true;
    }

    /**
     * @param object user $user
     * @return array
     */
    public function findByAuthor(User $user){
        // select query in DB
        return $array;
    }
}