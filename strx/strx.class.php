<?php
$base_name = "strx";
class Strx {
    public $string;
    //konversi str x
    public function convert($string,$type) {
        switch ($type) {
            # umum
            case 'reverse' :
                $this->string = strrev($string);
                break;
            case 'upper' :
                $this->string = strtoupper($string);
                break;
            case 'alpha' :
                $this->string = ucfirst($string);
                break;
            case 'lower' :
                $this->string = strtolower($string);
                break;
            case 'count' :
                $this->string = strlen($string);
                break;
            # enkripsi
            case 'md5' :
                $this->string = hash('md5',$string);
                break;
            # encode
            case 'base64_encode' :
                $this->string = base64_encode($string);
                break;
            case 'base64_decode' :
                $this->string = base64_decode($string);
                break;
            case 'rot13' :
                $this->string = str_rot13($string);
                break;
            # format teks
            case 'alay' :
                $this->string = alay($string);
                break;
            default:
                # code...
                break;
        }
    }
    public function output() {
        if(array_key_exists('strx',$_POST)) {
            return $this->filter($this->string);
        }
    }
    public function input() {
        if(array_key_exists('strx',$_POST)) {
            return $this->filter($_POST['input']);
        }
    }
    private function filter($string) {
        $result = htmlspecialchars($string);
        return $result;
    }
}
/*
Fungsi Converter
*/
function alay($string) {
    $string = strtoupper($string);
    $map_huruf = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I',
    'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V','W',
    'X', 'Y', 'Z','0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    $map_alay = array('4', '8', 'C', 'D', '3', 'F', '6', 'H', '1',
    'Je', 'Ka', 'L', 'eM', 'eN', '0', 'P', 'Qiu', 'eR', 'eS', '7', 'U', 'V','W',
    'X', 'Y', 'Z','0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    $hasil = str_replace($map_huruf,$map_alay,$string);
    return $hasil;

}

// Fungsi Struktur Web
function web_header() {
    global $base_name;
    //echo $_SERVER['PHP_SELF'];
    if($_SERVER['PHP_SELF']=="/{$base_name}/index.php") {
        $link = '<a href="tutorial.php">Cara Menggunakan</a>';
    }
    else {
        $link = '<a href="index.php">Mulai</a>';
    }
    echo <<<"HTML"
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>String X</title>
            <link rel="stylesheet" href="style.css" />
        </head>
        <body>
            <header>
                <h1>String X</h1>
                <p>
                    {$link}
                </p>
            </header>
HTML;
}
function web_footer() {
    echo <<<"FOOTER"
    <footer>
        <p>
            <b>String X </b>By Bobby Fiando Sadela &copy; 2015
        </p>
    </footer>
</body>
</html>
FOOTER;
}
?>
