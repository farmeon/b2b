<?php
/**
 * Created by PhpStorm.
 * UserController: dimon
 * Date: 12.01.2018
 * Time: 17:55
 */

namespace b2b\task3\src\models;


use b2b\task3\src\lib\ModelInterface;

class Post implements ModelInterface {

    private $id;
    private $author;
    private $text;

    /**
     * @param int $user_id
     * @param string $text
     * @return bool
     */
    public function addPost($user_id, $text){
        // TODO: SQL method.
        return true;
    }

    /**
     * @param int $id
     * @return object
     */
    public function getById($id){
        // TODO: SQL method.
        return $this;
    }

    /**
     * @param int $user_id
     * @return array
     */
    public function findByAuthor($user_id){
        // TODO: SQL method.
        return $array;
    }

    /**
     * @param int $post_id
     * @param array $arParam
     * @return bool
     */
    public function update($post_id, $arParam){
        // TODO: SQL method.
        return true;
    }

    /**
     * @return string
     */
    public function getAuthor(){
        return $this->author;
    }


    public function setAuthor($name){
        $this->author = $name;
    }

    public function remove(){
        // TODO: Implement remove() method.
    }

    public function getList()
    {
        // TODO: Implement getList() method.
    }


}