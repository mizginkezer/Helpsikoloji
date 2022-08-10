<?php
session_start();
ob_start();
?>
<html>
<head>
  <link href="css\genel.css" rel="stylesheet">
</head>


<style type="text/css">

.baslik{
padding-left: 610px;
font-size: 45px;
}

.res{
	padding-left: 500px;
}

.tablo{
	margin-left: 522px;
}

</style>



<body>

<img src="logo/2.png" style="width:350px; height:144px; margin-top:15px; margin-left:-50px;"> </img>
<div class="sidebar" style="margin-top:-50px;">
 
  <div id="linkler" style="margin-top:228px;">

  <a href="hastaAnaSayfa.php"> <img src="img/home.png" style="width:33px; height:33px;"> </img> Ana Sayfa   </a>
 
  <a href="randevular.php"> <img src="img/calendar.png" style="width:33px; height:33px;"> </img> Randevular  </a>
   <a href="gecmisRandevu.php"> <img src="img/past.png" style="width:33px; height:33px;"> Geçmiş Randevular</a>
  
  <?php
	if(!isset($_SESSION['id'])){
		echo "Giriş yapınız...";
		echo "<a href='kullanici_giris.php'>Yönlendir</a>";
	}
	else{
		echo "<div id='profil'> <a href='hasta_profil.php'> <img src='img/avatar.png' style='width:33px; height:33px; margin-top:-30px;'>".$_SESSION['Ad']." ".$_SESSION['Soyad']."</a></div>";
		echo "<a href='cikis.php'>ÇIKIŞ</a>";
	}
?>
</div>

</div>

<div class="baslik" style="margin-top:-100px;"><br>HASTA PROFİL<br></div><br>
<div class="res"><img src="img\hasta.png" width="600px;" height="400px;" border=""></div>


<?php

if(isset($_SESSION['id'])){
	
	$ad = $_SESSION['Ad'];
	$soyad = $_SESSION['Soyad'];
	$email = $_SESSION['Email'];
	$adres = $_SESSION['Adres']; 
	$telefon = $_SESSION['Telefon']; 

	echo "<div class='tablo' >
	<br>
	<table width='500' height='100' border='25'>

	<tr><td>ADI :".$ad."</td></tr>
	<tr><td>SOYADI : ".$soyad."</td></tr>
	<tr><td>ADRES : ".$adres."</td></tr>
	<tr><td>E-MAİL : ".$email."</td></tr>
	<tr><td>TELEON : ".$telefon."</td></tr>
	
	</table>

	</div>";
}
?> 
</body>
</html> 
<?php
ob_end_flush();
?>