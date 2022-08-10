<html>
<head>
  <title></title>

  <link href="css\genell.css" rel="stylesheet">
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<body>
<img src="logo/2.png" style="width:350px; height:144px; margin-top:15px; margin-left:-50px;"> </img>
<div class="sidebar" style="margin-top:-50px;">
 
  <div id="linkler" style="margin-top:228px;">

  <a href="hastaAnaSayfa.php"> <img src="img/home.png" style="width:33px; height:33px;"> </img> Ana Sayfa   </a>
 
  <a href="randevular.php"> <img src="img/calendar.png" style="width:33px; height:33px;"> </img> Randevular  </a>
   <a href="gecmisRandevu.php"> <img src="img/past.png" style="width:33px; height:33px;"> Geçmiş Randevular</a>
   <?php
  session_start();
  echo "<div id='profil'> <a href='hasta_profil.php'> <img src='img/avatar.png' style='width:33px; height:33px; margin-top:-30px;'>".$_SESSION['Ad']." ".$_SESSION['Soyad']."</a></div>";
  ?>
</div>

</div>
<center>
<form id="search-form">
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
</form>
<input type="submit" value="Filtrele" style="margin-left:450px;  border:none; border-radius:5px;">
</center>
<center><p class="ornek-r" style="margin-top:100px;">
  <table style="overflow: hidden;
    background-color: #e9e9e9;
    width: 100%;">
  <tr>
     <td><b>Hasta adı</b></td>
     <td><b>Doktor adı</b></td>
     <td><b>Randevu tarihi</b></td>
     <td><b>Randevu saati</b></td>
     <td><b>İşlemler</b></td>
  </tr>
  <tr>
  	<td>xxxxxxx</td>
      <td>xxxxxxx</td>
      <td>xxxxxxx</td>
      <td>xxxxxxx</td>
      <td><a href="#"><img src="img/düzenle.png" height="20"></a>&nbsp;&nbsp;<a href="#"><img src="img/dustbin.png"height="20"></a></td>

  </tr>
  <tr>
  	<td>xxxxxxx</td>
      <td>xxxxxxx</td>
      <td>xxxxxxx</td>
      <td>xxxxxxx</td>
      <td><a href="#"><img src="img/düzenle.png" height="20"></a>&nbsp;&nbsp;&nbsp;<a href="#"><img src="img/dustbin.png"height="20"></a></td>

  </tr>
  <tr>
  	<td>xxxxxxx</td>
      <td>xxxxxxx</td>
      <td>xxxxxxx</td>
      <td>xxxxxxx</td>
      <td><a href="#"><img src="img/düzenle.png" height="20"></a> &nbsp;&nbsp;&nbsp;<a href="#"><img src="img/dustbin.png"height="20"></a></td>
  </tr>


  <div class="table">
    <a class="active" href="#">Randevular</a>
    <input type="text" placeholder="Arama...">
  </div>


  </table>

</p></center>
<div class="sideba">
<h1 class="h1">Popüler Doktorlar</h1>

  <a href="#home">Doktor Adı</a>
  
  <a href="#services">Doktor Adı</a>
</div>





</body>
</html>
