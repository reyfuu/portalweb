<?php 
include("inc/fungsi.php");
 ?>
<!DOCTYPE html>
<html>

<head>
    <title><?=getprofilweb('site_title')?></title>
    <meta name="description" content="<?=getprofilweb('meta_desc')?>">
    <meta name="keywords" content="<?=getprofilweb('meta_key')?>">

    <link rel="stylesheet" type="text/css" href="assets/style.css">

</head>

<body>
    <div class="wrap">
        <div class="pd10">

            <header>
                <!-- <div class="logo">
                    <img src="<?//=URL_SITUS.PATH_LOGO.'/'.FILE_LOGO;?>">
                </div> -->

                <div class="menyapa pt35 pb35 mb10">

                    <h1>Hello Indonesia</h1>

                    <?php 
						$tanggal = mktime(date('m'), date("d"), date('Y'));
						echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";
						date_default_timezone_set("Asia/Jakarta");
						$jam = date ("H:i");
						echo " | Pukul : <b> " . $jam . " " ." </b> ";
						$a = date ("H");
						if (($a>=6) && ($a<=11)) {
							echo " <b>, Selamat Pagi !! </b>";
						}else if(($a>=11) && ($a<=15)){
							echo " , Selamat  Pagi !! ";
						}elseif(($a>15) && ($a<=18)){
							echo ", Selamat Siang !!";
						}else{
							echo ", <b> Selamat Malam </b>";
						}
					?>

                </div>
                <div class="clear"></div>




                <nav>

                    <a href="./">Home</a>
                    <?php 
				global $connect;

				$menu = mysqli_query($connect,"SELECT * FROM kategori WHERE Terbit='1' ORDER BY ID ASC LIMIT 0,10");
				while ($r = mysqli_fetch_array($menu)) {
					extract($r);
					
					echo'
					<a href="./?open=cat&id='.$ID.'">'.$Kategori.'</a>
					';
				}

				 ?>

                    <form action="" method="GET" class="btn fr" style="margin-top:-5px; margin-right: -8px;">
                        <input type="text" name="key" placeholder="Cari..">
                        <input type="submit" name="open" value="cari">
                    </form>



                </nav>

                <div class="teksjalannav pt10 pb10 mt5">

                    <marquee direction="left" behavior="scroll">Ayo Baca Berita Jangan Lupa Sambil Ngopi :v
                    </marquee>
                </div>

            </header>