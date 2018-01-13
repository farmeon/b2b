<?php
/**
 * Created by PhpStorm.
 * UserController: dimon
 * Date: 12.01.2018
 * Time: 16:41
 */

namespace b2b\task3\src\models;


use b2b\task3\src\lib\ModelInterface;

class User implements ModelInterface{

    private $id;
    private $name;

    /**
     * @param  array $params
     * @return object
     */
    public  function getById($params){
        // TODO: SQL method.
        return $this;
    }

    /**
     * @param  array $params
     * @return object
     */
    public  function getList($params){
        // TODO: SQL method.
        return $this;
    }

    /**
     * @param  string $name
     * @return object
     */
    public function getByName($name){
        // TODO: SQL method.
        return $this;
    }

    /**
     * @return int
     */
    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function remove(){
        // TODO: Implement remove() method.
    }
}