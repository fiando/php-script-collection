<?php
require_once 'model/Model.php';
class Controller {
  public $model;

  public function invoke() {
    $this->model = new Model;

    if(isset($_GET['id'])) {
      $id = $_GET['id'];
      $book = $this->model->getBook($id);
      
      include 'view/book.php';
    }
    else {
      $bookList = $this->model->getBookList();

      include 'view/booklist.php';
    }
  }
}

?>
