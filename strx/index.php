<?php
require("strx.class.php");
$strx = new Strx;
if(array_key_exists('strx',$_POST)) {
    $strx->convert($_POST['input'],$_POST['type']);
}
?>
<?php web_header(); ?>
        <form class="x-form" action="index.php" method="post">
            <input type="text" name="input" placeholder="Masukan Teks" autofocus autocomplete="off"><br />
            <select name="type">
                <option>Pilih Opsi</option>
                <optgroup label="Umum">
                    <option value="reverse">Balik</option>
                    <option value="upper" >Huruf Besar</option>
                    <option value="alpha">Alfabet</option>
                    <option value="lower">Huruf kecil</option>
                    <option value="count">Hitung Huruf</option>
                </optgroup>
                <optgroup label="Enkripsi">
                    <option value="md5" >MD5</option>
                </optgroup>
                <optgroup label="Encode / Decode">
                    <option value="base64_encode">Encode Base 64</option>
                    <option value="base64_decode">Decode Base 64</option>
                </optgroup>
                <optgroup label="Enkripsi Sederhana">
                    <option value="rot13">Rot 13</option>
                </optgroup>
                <optgroup label="Format Teks">
                    <option value="alay">Alay</option>
                </optgroup>
            </select><br />
            <input type="submit" name="strx" value="Manipulasi">
        </form>
        <div class="box">
            <div class="text io">
                <h3>Input / Output</h3><hr />
                <span>
                    <p><b>Teks Input :</b><br /> <?php echo $strx->input(); ?></p>
                    <p><b>Teks Output :</b><br /><?php echo $strx->output(); ?></p>
                </span>
            </div>
        </div>
<?php web_footer(); ?>
<?php unset($_POST['strx']); ?>
