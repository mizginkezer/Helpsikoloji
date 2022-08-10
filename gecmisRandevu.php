<html>
<head>
  <link href="css\genel.css" rel="stylesheet">

</head>
<body>
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
<img src="logo/2.png" style="width:350px; height:144px; margin-top:-50px; margin-left:-50px;"> </img>
<div class="sidebar" style="margin-top:-50px;">

  <div id="linkler" style="margin-top:140px;">

  <a href="hastaAnaSayfa.php"> <img src="img/home.png" style="width:33px; height:33px;"> </img> Ana Sayfa   </a>

  <a href="randevular.php"> <img src="img/calendar.png" style="width:33px; height:33px;"> Randevular</a>

  <a href="gecmisRandevu.php"> <img src="img/past.png" style="width:33px; height:33px;"> </img> Geçmiş Randevular  </a>

  <?php
  session_start();
  echo "<div id='profil'> <a href='hasta_profil.php'> <img src='img/avatar.png' style='width:33px; height:33px; margin-top:-30px;'>".$_SESSION['Ad']." ".$_SESSION['Soyad']."</a></div>";
  ?>
</div>

</div>


<center><p class="ornek-r" style="box-shadow: 5px 5px black;
    padding: 10px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border: 1px solid gray;
    width: 500;
    position: absolute;
    left: 33%;
    top: 20%;">
  <table style="display: table;
    border-collapse: separate;
    box-sizing: border-box;
    text-indent: initial;
    white-space: normal;
    line-height: normal;
    font-weight: normal;
    font-size: medium;
    font-style: normal;
    color: -internal-quirk-inherit;
    text-align: start;
    border-spacing: 2px;
    border-color: grey;
    font-variant: normal;">
    <tr>
      <td><img src="img/profil1.png" class="icon" style="float: left;
    /* padding: 6px 10px 10px 10px; */
    height: 30px;
    width: 30px;"></td>
    <td>Ünvanı/Doktor Adı</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
    <img src="img/calendar.png" class="icon" style="float: left;
    /* padding: 6px 10px 10px 10px; */
    height: 30px;
    width: 30px;">
    <td>Randevu Tarihi</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
    <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
    <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
</td>
<td>

</td>
<td>

    <td>&nbsp;</td>
</td>
</tr>
</table>
</p></center>
<center><p class="ornek" style="box-shadow: 5px 5px black;
    padding: 10px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border: 1px solid gray;
    width: 500;
    position: absolute;
    left: 33%;
    top: 40%;">

  <table style="display: table;
    border-collapse: separate;
    box-sizing: border-box;
    text-indent: initial;
    white-space: normal;
    line-height: normal;
    font-weight: normal;
    font-size: medium;
    font-style: normal;
    color: -internal-quirk-inherit;
    text-align: start;
    border-spacing: 2px;
    border-color: grey;
    font-variant: normal;">
    <tr>
      <td><img src="img/profil1.png" class="icon" style="float: left;
    /* padding: 6px 10px 10px 10px; */
    height: 30px;
    width: 30px;"></td>
    <td>Ünvanı/Doktor Adı</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
    <img src="img/calendar.png" class="icon" style="float: left;
    /* padding: 6px 10px 10px 10px; */
    height: 30px;
    width: 30px;">
    <td>Randevu Tarihi</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
    <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
    <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
</td>
<td>

</td>
<td>

    <td>&nbsp;</td>
</td>
</tr>
</table>

</p></center>
<div class="sideba">
<div id ="yazi">
<h1 class="h1">Popüler Doktorlar</h1>
</div>
  <a href="#hasta1">Doktor Adı</a>
  <a href="#hasta2">Doktor Adı</a>
  <a href="egitmeneDanis.php" style="width:0px; height:0px;"> <img src="img/support.png" style="width:33px; margin-left:60px; margin-top:600px;"> </img> </a>
</div>





</body>
</html>
