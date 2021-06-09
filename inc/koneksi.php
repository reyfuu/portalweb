<?php 
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'portalberita');

define('URL_SITUS', 'http://localhost/portalberita/');
// define('PATH_LOGO', 'image');
define('PATH_GAMBAR', 'photo');
// define('FILE_LOGO', 'logo2.png');
define('FILE_ICON', 'icon2.png');

define('POPULER_TIME', '-1000'); //lama (hari) rentang waktu berita populer.


$connect = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);

if(mysqli_connect_errno()){

	echo "Gagal Koneksi ke Database ". mysqli_connect_error();
}

?>