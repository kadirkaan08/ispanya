<?php 
//Post metodu ile gönderilen verilerimizi alıyoruz.
$kuladi=$_POST["kuladi"];
$email=$_POST["email"];
$sifre=$_POST["sifre"];
$cinsiyet=$_POST["cinsiyet"];
$sehir=$_POST["sehir"];

//veritabanına veri eklemek için veri tabanı bağlantısını yapıyoruz.
$vt_sunucu= "localhost";
$vt_kullanici= "root";
$vt_sifre= "";
$vt_adi= "deneme";

// Bağlantıyı oluştur
$baglan= mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

// Bağlantıyı Kontrol Et
if (!$baglan) {
  die("Veri Tabanı Bağlantısı Başarısız: " . mysqli_connect_error());
}

$ekle= "insert into uyeler(kuladi,email,sifre,cinsiyet,sehir)  VALUES ('".$kuladi."','".$email."','".$sifre."','".$cinsiyet."','".$sehir."')";

if ($baglan->query($ekle) === TRUE) 
{
    echo "Üyelik işlemi Başarılı  ";
	   
		
} 
else 
{
   echo "Hata: " . $ekle. "<br>" . $baglan->error;
}


?>

<html>
<body> 
	<a href="uyegiris.html" target="_self">       Giriş Yapmak için Tıklayın </a>
 </body>
</html>