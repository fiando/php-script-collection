<?php
if(!isset($_GET['id'])) {
  header('location: index.php');
}
require_once('crud.php');
$db = new crud;
?>
<?php $db->del($_GET['id']) ?>
<?php header('location: index.php'); ?>
