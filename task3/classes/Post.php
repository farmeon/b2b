<?php
/**
 * Created by PhpStorm.
 * User: dimon
 * Date: 12.01.2018
 * Time: 16:26
 */

namespace b2b\task3\classes;

use b2b\task3\int\PostInterface;

class Post implements PostInterface{

    private $id;
    private $author;
    private $text;

    /**
     * Post constructor.
     * @param string $text
     */
    public function __construct($text){
        $this->text = $text;
    }

    /**
     * @return int
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @return author
     */
    public function getAuthor(){
        return $this->author;
    }

    /**
     * @param object User $author
     * @return none
     */
    public function setAuthor(User $author){
        $this->author = $author->getName();
    }
}