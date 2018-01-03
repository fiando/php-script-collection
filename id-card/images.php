<?php
if (!isset($_POST['submit'])) {
  header("location: index.php");
}
$name = $_POST['name'];
$hbd = $_POST['hbd'];
$location = $_POST['location'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$tmp_hasil = 'assets/images/';
$tmp_stamp = 'assets/images/tmp/';
$rand = rand(1111,999999);

require_once('func.php');
header("Content-type: image/png");
header("Content-Disposition: attachment; filename=\"$name-id-card.png\"");

$im = imagecreatefrompng("assets/images/templates/bg-depan.png");

create_image('name',trim("$name"),90,25);
create_image('hbd',trim("$hbd"));
create_image('location',trim("$location"));
create_image_email('email',trim("$email"));
create_image('phone',trim("$phone"));

stamp_all();

imagepng($im);
imagedestroy($im);

?>
