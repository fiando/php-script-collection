<?php
function create_image($link,$text,$y = 135,$fs = 12) {
  global $tmp_stamp;
  $im     = imagecreatefrompng("assets/images/templates/$link.png");
  $px     = (imagesx($im) - $fs/1.55* strlen($text)) / 2;
  $color = imagecolorallocate($im, 255,255,255);

  imagefttext($im, $fs, 0,$px, $y, $color,'assets/fonts/coolvetica.ttf',$text);
  imagepng($im,"$tmp_stamp.$link.png");
}
function create_image_email($link,$text,$y = 135,$fs = 12) {
  global $tmp_stamp;
  $text = explode('@',$text);
  $im     = imagecreatefrompng("assets/images/templates/$link.png");
  $px     = (imagesx($im) - $fs/1.55* strlen($text[0])) / 2;
  $color = imagecolorallocate($im, 255,255,255);

  imagefttext($im, $fs, 0,$px, $y, $color,'assets/fonts/coolvetica.ttf',$text[0]."@");
  imagefttext($im, $fs, 0,$px, $y+20, $color,'assets/fonts/coolvetica.ttf',$text[1]);
  imagepng($im,"$tmp_stamp.$link.png");
}
function stamp($link,$right = 20,$btm = 10) {
  global $im,$tmp_stamp;
  $stamp = imagecreatefrompng("$tmp_stamp.$link.png");
  $marge_right = $right;
  $marge_bottom = $btm;
  $sx = imagesx($stamp);
  $sy = imagesy($stamp);

  imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));
}
function stamp_all() {
  stamp('name',21,224);
  stamp('hbd',240*3-42);
  stamp('location',240*2-21);
  stamp('email',240);
  stamp('phone',22);
}
?>
