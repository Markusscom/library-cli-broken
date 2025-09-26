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
    function display() {
        echo "Title: " . $this->title . " Author: " . $this->author . " Status: " . $this->status . "\n";
    }
    function setStatus(&$updStatus) {
        if ($updStatus === "y") {
            $this->status = "available";
            echo "status set to available";
        }
        elseif ($updStatus === "n") {
            $this->status = "not available";
            echo "status set to not available";
        }
        else {
            echo "wrong format!";
            return;
        }
    }
}
?>