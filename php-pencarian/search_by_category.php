<?php
require_once('cnx.php');

function print_people() {
  global $connect;
  $sql = "SELECT * FROM people";
  $query = mysqli_query($connect,$sql);
  while ($res = mysqli_fetch_assoc($query)) {
    $data[] = $res;
  }
  return $data;
}
function search_people() {
  global $connect;
  $category = $_GET['category'];
  $cari = mysqli_real_escape_string($connect,$_GET['cari']);

  $sql = "SELECT * FROM `people` WHERE ";
  switch ($category) {
    case 'nama':
    $sql .= "nama";
      break;
    case 'kota':
        $sql .= "kota";
        break;
    default:
      $sql .= "nama";
      break;
  }
  $sql .= " LIKE '%$cari%'";

  $query = mysqli_query($connect,$sql);
  if (mysqli_num_rows($query) > 0) {
    while ($res = mysqli_fetch_assoc($query)) {
      $data[] = $res;
    }
    return $data;
  }
  else {
    return 0;
  }
}
function human_jkelamin($var) {
  $retVal = ($var == "L" OR $var == "l") ? 'Laki - Laki' : 'Perempuan' ;
  return $retVal;
}
?>
<form class="" action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
  <select name="category">
    <option value="nama">nama</option>
    <option value="kota">kota</option>
  </select>
  <input type="search" name="cari" value="">
</form>
<?php if (!isset($_GET['cari'])): ?>
  <?php $res = print_people(); ?>
  <table border="1">
    <tr>
      <td>ID</td>
      <td>Nama</td>
      <td>Jenis Kelamin</td>
      <td>Kota</td>
    </tr>
  <?php foreach ($res as $key => $data): ?>
    <tr>
      <td><?= $key ?></td>
      <td><?= $data['nama'] ?></td>
      <td><?= human_jkelamin($data['jkelamin'] ) ?></td>
      <td><?= $data['kota'] ?></td>
    </tr>
  <?php endforeach; ?>
  </table>
<?php else: ?>
  <?php $res = search_people(); ?>
  <?php if (!empty($res)): ?>
    <table border="1">
      <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Kota</td>
      </tr>
    <?php foreach ($res as $key => $data): ?>
      <tr>
        <td><?= $key ?></td>
        <td><?= $data['nama'] ?></td>
        <td><?= human_jkelamin($data['jkelamin'] ) ?></td>
        <td><?= $data['kota'] ?></td>
      </tr>
    <?php endforeach; ?>
    </table>
  <?php else: ?>
    <p>Data Tidak Ditemukan !</p>
  <?php endif; ?>
<?php endif; ?>
