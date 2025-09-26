<?php

class Book {
    public $title;
    public $author;
    public $status;
    function __construct($title, $author, $status) {
        $this->title = $title;
        $this->author = $author;
        $this->status = $status;
    }
}
?>