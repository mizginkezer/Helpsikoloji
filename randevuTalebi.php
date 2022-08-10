<form action="hastaAnaSayfa.php" method="post">
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/i18n/jquery-ui-timepicker-tr.js"></script>
  <link href="css\genel.css" rel="stylesheet">
</head>
<body>
<img src="logo/2.png" style="width:350px; height:144px; margin-top:15px; margin-left:-50px;"> </img>
<div class="sidebar" style="margin-top:-50px;">
 
  <div id="linkler" style="margin-top:228px;">

  <a href="hastaAnaSayfa.php"> <img src="img/home.png" style="width:33px; height:33px;"> </img> Ana Sayfa   </a>
 
  <a href="randevular.php"> <img src="img/calendar.png" style="width:33px; height:33px;"> </img> Randevular  </a>
   <a href="gecmisRandevu.php"> <img src="img/past.png" style="width:33px; height:33px;"> Geçmiş Randevular</a>
 <div id="profil"> <a href="profil.php"> <img src="img/avatar.png" style="width:33px; height:33px; margin-top:-30px;"> Profil</a></div>
</div>

</div>


<center>
<p class="ornek" style="box-shadow: 5px 5px black;
    padding: 10px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border: 1px solid gray;
    width: 500;
    position: absolute;
    left: 33%;
    top: 20%;">
  <table>
    <tr>
      <td><img src="img/avatar.png" class="icon" style="width:30px; height:30px; float:left;"></td>
      <?php
    require 'connect.php';
    $doktorListele = $db->query("SELECT * FROM kullanici WHERE Kullanici_Tur_id = 1 OR Kullanici_Tur_id = 3", PDO::FETCH_ASSOC);
        if($doktorListele->rowCount())
        {
          foreach ($doktorListele as $veri)
          {
            if($veri['Kullanici_Tur_id'] == 1)
            $tur = "DR.";
            else if($veri['Kullanici_Tur_id'] ==3)
            $tur = "Stajyer";
              $gelenID = $_GET['id'];
              if($veri['Kullanici_id'] == $gelenID)
              { 
                echo "<td>".$tur." ".$veri['Ad']." ".$veri['Soyad']."</td>";
              }
          }
        }
    ?>
    
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
    <img src="img/calendar.png" class="icon" style="width:30px; height:30px; float:left;">
    </td>
    <td>Randevu Tarihi:</td>
    <td><input name="tarih" type="text">
<script>
 $( function() {

 $( "#tarih" ).datetimepicker({
    dateFormat: "dd-mm-yy",
    altFieldTimeOnly: false,
    altFormat: "yy-mm-dd",
    altTimeFormat: "h:m",
    altField:"#tarih-db",
    monthNames: [ "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık" ],
    dayNamesMin: [ "Pa", "Pt", "Sl", "Ça", "Pe", "Cu", "Ct" ],
    firstDay:1
});
 } );
</script>
</td>
<td>
  <div class="btn">
  <button type="btn" onclick="butonfonksiyonu()">Onayla</button>
</div>
</td>
<td>&nbsp;</td>
</tr>
</table>
</p></center>

<div class="sideba">
<h1 class="h1">Popüler Doktorlar</h1>

  <a href="#home">Doktor Adı</a>
  
  <a href="#services">Doktor Adı</a>
</div>

<div class="main">
</div>

</body>
</html>
</form>