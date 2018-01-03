<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Book List</title>
  </head>
  <body>
    <table border=1>
      <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Author</td>
        <td>Publisher</td>
      </tr>
        <?php foreach ($bookList as $id => $book): ?>
          <tr>
            <td><a href="?id=<?php echo $id; ?>"><?php echo $id; ?></a></td>
            <td><?php echo $book->name; ?></td>
            <td><?php echo $book->author; ?></td>
            <td><?php echo $book->publisher; ?></td>
          </tr>
        <?php endforeach; ?>
    </table>
  </body>
</html>
