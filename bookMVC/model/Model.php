<?php
require_once 'Book.php';

class Model {
  public function getBookList() {
    $arr = array(
      '0' => new Book('Title A','Author A','Publisher A'),
      '1' => new Book('Title B','Author B','Publisher B'),
      '2' => new Book('Title C','Author C','Publisher C'),
      '3' => new Book('Title D','Author D','Publisher D'),
    );
    return $arr;
  }
  public function getBook($id) {
    $listBook = $this->getBookList();
    $pickBook = $listBook[$id];
    return $pickBook;
  }
}

?>
