<?php
/**
 * Created by PhpStorm.
 * User: dimon
 * Date: 13.01.2018
 * Time: 3:14
 */

namespace b2b\task3\src\lib;


interface ModelInterface{

    public function getById();

    public function getList();

    public function remove();

}