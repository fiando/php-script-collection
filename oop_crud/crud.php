<?php
class crud {
  private $dbUser = 'root';
  private $dbPass = '';
  private $dbHost = 'localhost';
  private $dbName = 'crud_test';
  protected $connect;

  public function __construct() {
    $this->connect = mysqli_connect($this->dbHost,$this->dbUser,$this->dbPass,$this->dbName);
  }
  public function create() {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = "INSERT INTO blog(title,content,created,updated) VALUES('$title','$content',NOW(),NOW())";
    return mysqli_query($this->connect,$sql);
  }

  public function update($id = NULL) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = "UPDATE blog SET title = '$title',content = '$content',updated = NOW() WHERE blog.id_post = $id";
    return mysqli_query($this->connect,$sql);
  }

  public function view($id = NULL) {
    if(empty($id))
      $sql = "SELECT * FROM blog";
    else
      $sql = "SELECT * FROM blog WHERE id_post = $id";

    $query = mysqli_query($this->connect,$sql);
    while ($res = mysqli_fetch_assoc($query)) {
      $data[] = $res;
    }
    return $data;
  }

  public function del($id) {
    $sql = "DELETE FROM blog WHERE id_post = $id";
    return mysqli_query($this->connect,$sql);
  }
  public function search() {
    $search = $_GET['title'];
    $sql = "SELECT * FROM blog WHERE title LIKE '%$search%'";
    $query = mysqli_query($this->connect,$sql);
    if(mysqli_num_rows($query) > 0) {
      while ($res = mysqli_fetch_assoc($query)) {
        $data[] = $res;
      }
      return $data;
      }
      return 0;
    }

}

?>
