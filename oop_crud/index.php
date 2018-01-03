<?php
require_once('crud.php');
$db = new crud;
if (isset($_POST['submit'])) {
  $db->create();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD</title>
  </head>
  <body>
    <p>Cari Artikel</p>
    <form class="" action="search.php" method="get">
      <input type="search" name="title" value="">
    </form>
    <p>Buat Artikel</p>
    <form class="" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
      <input type="text" name="title" value=""><br><br>
      <textarea name="content" rows="8" cols="40"></textarea><br>
      <input type="submit" name="submit" value="Buat Artikel">
    </form>
    <hr>
    <?php
      $view = $db->view();
    ?>
    <?php foreach ($view as $key => $value): ?>
    <p>
      <a href="view.php?id=<?= $value['id_post'] ?>"><?= $value['title'] ?></a><br>
        <?= $value['content'] ?><br>
        <i><?= $value['created'] ?> | <?= $value['updated'] ?></i>
    </p>
    <?php endforeach; ?>
  </body>
</html>
