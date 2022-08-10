<?php
ob_start();
?>

<!DOCTYPE html>
<form method="post">
<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="css\kullanicikayit.css">
</head>
<body>


	<form action="" method="post">

		<br> 
		<h1>KULLANICI KAYIT </h1>

<input type="text" name="ad" placeholder="ADINIZ" >

<input type="text" name="soyad" placeholder="SOYADINIZ">

<input type="text" name="adres" placeholder="ADRES">

<input type="text" name="kul_adi" placeholder="KULLANICI ADI">

<input type="text" name="sifre" placeholder="ŞİFRE">

<input type="text" name="telefon" placeholder="TELEFON">

<input type="text" name="mail" placeholder="MAİL"><br>
	

	<div class="select">
Bölüm : <select name="bolum">

<option value="1">Doktor</option>
<option value="2">Hasta</option>
<option value="3">Stajyer</option>
</select><br><br>


Cinsiyet : <select name="cinsiyet">
<option value="kadın">Kadın</option>
<option value="erkek">Erkek</option>

</select><br>
</div><br>

<input type="submit" name="kayit" value="Kayıt Ol">

</form>
</body>
</html>
</form>


<?php
if (isset($_POST['kayit']))  {
	
	$db = new PDO("mysql:host=localhost;dbname=psikolojivt;","root","");	

$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$adres=$_POST['adres'];
$kul_adi=$_POST['kul_adi'];
$sifre=$_POST['sifre'];
$telefon=$_POST['telefon'];
$mail=$_POST['mail'];
$bolum=$_POST['bolum'];
$cinsiyet=$_POST['cinsiyet'];



$ekle = $db->prepare("insert into kullanici SET Ad = ?,Soyad = ?,Adres= ?,Kullanici_Adi = ?, Sifre = ?,Telefon = ?,EMail = ?,Kullanici_Tur_id = ?,Cinsiyet = ?");
$ekle->execute([$ad,$soyad,$adres,$kul_adi,$sifre,$telefon,$mail,$bolum,$cinsiyet]);

if(empty($ad) || empty($soyad) || empty($kul_adi) || empty($sifre) || empty($telefon) || empty($mail))
{
	echo "<script>alert('Lütfen Bütün Bilgileri Girdiğinizden Emin Olunuz')</script>";

}
else{
	
	if ($ekle) {
		
		echo "<script>alert('Kayıt Başarılı Bir Şekilde Oluşturuldu')</script>";
	}
}
}
ob_end_flush();
?>

