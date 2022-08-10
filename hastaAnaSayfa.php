<?php
session_start();
ob_start();
?>
<html>
<head>
  <title></title>


  <link href="css\anaSayfaGenel.css" rel="stylesheet">
</head>
<body>
<center>
<form id="search-form" action="cvPage.php" method="get">
    <div class="search" style="position: relative;
    width: 190px;
    height: 30px;">
      <input type="text" name="search" class="round" style="border-radius:30px; width:300px; margin-top:50px; margin-left: -20px;" />
      <button type="submit" style="position:absolute; margin-top:-17px; margin-left:160px; border-radius:5px; border:none;">
<img src="img/buyutec.png" style="width:10px;

    z-index: 10;
    border-radius: 5px;
    border: none;" />
</button>
    </div>

<input type="submit" value="Filtrele" style="margin-left:450px;  border:none; border-radius:5px;">
</center>
<img src="logo/2.png" style="width:350px; height:144px; margin-top:-50px; margin-left:-50px;"> </img>
<div class="sidebar" style="margin-top:-50px;">

  <div id="linkler" style="margin-top:228px;">

  <a href="hastaAnaSayfa.php"> <img src="img/home.png" style="width:33px; height:33px;"> </img> Ana Sayfa   </a>

  <a href="randevular.php"> <img src="img/calendar.png" style="width:33px; height:33px;"> Randevular</a>

  <a href="gecmisRandevu.php"> <img src="img/past.png" style="width:33px; height:33px;"> </img> Geçmiş Randevular  </a>

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
<center><p class='ornek'>
  <?php
    require 'connect.php';
    $doktorListele = $db->query("SELECT * FROM kullanici WHERE Kullanici_Tur_id = 1 OR Kullanici_Tur_id = 3", PDO::FETCH_ASSOC);
    if($doktorListele->rowCount() && isset($_SESSION['id']))
    {
      foreach ($doktorListele as $veri)
      {
        if($veri['Kullanici_Tur_id'] == 1)
            $tur = "DR.";
        else if($veri['Kullanici_Tur_id'] ==3)
            $tur = "Stajyer";
       //echo "<center><p class='ornek-r'>";
        echo "<table>";
          echo "<br>";
            echo "<tr>";
              echo"<td>"."<img src='img/profil1.png' class='icon'>"."</td>";
                  echo "<td>".$tur." ". $veri['Ad']. " ". $veri['Soyad']. "</div>". "</td>";
                echo"<td>&nbsp;</td>";
            echo"</tr>";

            echo"<tr>";
                echo "<td>";
                  echo "<img src='img/curriculumm.png' class='icon'>";
                  echo '<td><a href="cvPage.php?id='.$veri["Kullanici_id"].'">Ozgecmis</a>'."</td>";
                echo "</td>";

                echo "<td>";
                  echo "<img src='img/calendar.png' class='icon'>";
                    echo "<td>Randevular</td>";
                echo "</td>";

                echo "<td>";
                  echo "<img src='img/request.png' class='icon'>";
                    echo '<td><a href="randevuTalebi.php?id='.$veri["Kullanici_id"].'">Randevu Talebi</a>'."</td>";
                echo "</td>";
            echo"</tr>";
        echo "</table>";
        //echo "</p></center>";
      }
    }
  ?>

<div class="sideba">
<div id ="yazi">
<h1 class="h1">Popüler Doktorlar</h1>
</div>
  <a href="ÖZGEÇMİŞ.php">Doktor Adı</a>
  <a href="ÖZGEÇMİŞ.php">Doktor Adı</a>
  <a href="egitmeneDanis.php" style="width:0px; height:0px;"> <img src="img/support.png" style="width:33px; margin-left:60px; margin-top:600px;"> </img> </a>
</div>


<?php
 if($doktorListele->rowCount())
    {
      foreach ($doktorListele as $veri)
      {
        if($veri['Kullanici_Tur_id'] == 1)
            $tur = "DR.";
        else if($veri['Kullanici_Tur_id'] ==3)
            $tur = "Stajyer";

          echo "<img src='img/profil.png' class='icon'>";
          echo"<a href='ÖZGEÇMİŞ.php'><h3>".$veri['Ad']. " ". $veri['Soyad']."</h3></a>";
      }
    }
?>

</div>

<div class="main">
</div>

</body>
</form>
</html>
<?php
ob_end_flush();
?>
