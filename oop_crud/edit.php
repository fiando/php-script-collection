<?php
require_once('crud.php');
$db = new crud;
if (isset($_POST['submit'])) {
  $db->update($_GET['id']);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD</title>
  </head>
  <body>
    <p>Edit Artikel</p>
    <a href="edit.php?id=<?= $_GET['id']?>">Edit Data Ini</a> |
    <a href="delete.php?id=<?= $_GET['id']?>">Hapus Data Ini</a>
    <?php $view = $db->view($_GET['id']); ?>
    <?php foreach ($view as $key => $value): ?>
      <form class="" action="<?= $_SERVER['PHP_SELF'] ?>?id=<?= $_GET['id']?>" method="post">
        <input type="text" name="title" value="<?= $value['title'] ?>"><br><br>
        <textarea name="content" rows="8" cols="40"><?= $value['content'] ?></textarea><br>
        <input type="submit" name="submit" value="Edit Artikel">
      </form>
    <?php endforeach; ?>
  </body>
</html>
