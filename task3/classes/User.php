<?php
/**
 * Created by PhpStorm.
 * User: dimon
 * Date: 12.01.2018
 * Time: 16:56
 */

namespace b2b\task3\classes;

use b2b\task3\int\UserInterface;

class User implements UserInterface {

    private $id;
    private $posts = [];
    private $name;

    /**
     * User constructor.
     * @param string $name
     */
    public function __construct($name){
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(){
        return $this->name;
    }




}