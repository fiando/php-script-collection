<?php
if(!isset($_GET['title'])) {
  header('location: index.php');
}
require_once('crud.php');
$db = new crud;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD</title>
  </head>
  <body>
    <?php $view = $db->search($_GET['title']); ?>
    <?php if ($view): ?>
      <?php foreach ($view as $key => $value): ?>
        <p>
          <a href="view.php?id=<?= $value['id_post'] ?>"><?= $value['title'] ?></a><br>
          <?= $value['content'] ?><br>
          <i><?= $value['created'] ?> | <?= $value['updated'] ?></i>
        </p>
        <a href="edit.php?id=<?= $value['id_post'] ?>">Edit Data Ini</a> |
        <a href="delete.php?id=<?= $value['id_post'] ?>">Hapus Data Ini</a>
      <?php endforeach; ?>
    <?php endif; ?>
  </body>
</html>
