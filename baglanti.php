<?php   


$vt_sunucu="sql210.epizy.com";
$vt_kullanici="epiz_28689869";
$vt_sifre="1nxZSB987B7cZBE";
$vt_adi="epiz_28689869_g191210010";


$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if(!$baglan)
{
    die("Veri tabanı bağlantı işlemi başarısız".mysqli_connect_error());
}


?>
