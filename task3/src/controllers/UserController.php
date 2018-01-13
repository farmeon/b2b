<?php
/**
 * Created by PhpStorm.
 * UserController: dimon
 * Date: 12.01.2018
 * Time: 16:56
 */

namespace b2b\task3\src\controllers;

use b2b\task3\src\lib\UserInterface;
use b2b\task3\src\models\User;

class UserController implements UserInterface {

    /**
     * @param  string $name
     * @return object
     */
    public function getByName($name){
        $model = new User();
        $object = $model->getByName($name);
        return $object;
    }
}