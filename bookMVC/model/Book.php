<?php
class Book {
  public $name;
  public $author;
  public $publisher;

  public function __construct($name,$author,$publisher) {
    $this->name = $name;
    $this->author = $author;
    $this->publisher = $publisher;
  }
}
?>
