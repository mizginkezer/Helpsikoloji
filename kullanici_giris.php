<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="css\kullanicigiris.css">
</head>
<body>


	<form action="" method="post">

			<br><br>
		<h1>KULLANICI GİRİŞ </h1><br>

	<input type="text" name="kul_adi"  placeholder="KULLANICI ADI"><br><br>
	<input type="text" name="sifre" placeholder="ŞİFRE"><br><br>

	<input type="submit" name="giris" value="Giriş Yap"><br><br>
	<a href ="kullanici_kayit.php">Eğer hesabınız yoksa, buraya tıklayarak kayıt olunuz</a>

	</form>

</body>
</html>




<?php


$servername="localhost";
$username ="root";
$password="";
$dbname="psikolojivt";

$db = new mysqli($servername,$username,$password,$dbname);
$new = mysqli_set_charset($db,"utf8");

if($db->connect_error){
	die("Bağlantı başarısız : " . $db->connect_error);
}

if ($_POST){
	
	$kadi=$_POST['kul_adi'];
	$sifre=$_POST['sifre'];

	$giris = "select * from kullanici where Kullanici_Adi='$kadi' and Sifre='$sifre'";
	$getir = $db->query($giris);

	if($getir->num_rows>0){
		
		while($row = $getir->fetch_assoc())
		{
		$_SESSION['id'] = $row['Kullanici_id'];
		$_SESSION['Ad'] = $row['Ad'];
		$_SESSION['Soyad'] = $row['Soyad'];
		$_SESSION['Email'] = $row['Email'];
		$_SESSION['Adres'] = $row['Adres'];
		$_SESSION['Telefon'] = $row['Telefon'];
		header("Location: hastaAnaSayfa.php");
		}
	}
	else{
		echo "<script>alert('Kullanıcı adı ve şifreyi kontrol ediniz')</script>";
	}
}
ob_end_flush();
?>
