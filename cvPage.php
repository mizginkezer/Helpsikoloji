

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
crossorigin="anonymous"></script>
<center>
<form action="hastaAnaSayfa.php">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
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
                echo "<h5 class='card-title'>".$tur." ".$veri['Ad']." ".$veri['Soyad']."</h5>";
                echo "<ul class='list-group list-group-flush'>
                <li class='list-group-item'>Email: " .$veri['Email']."</li>
                <li class='list-group-item'>Adres: " .$veri['Adres']."</li>
                <li class='list-group-item'>Telefon: " .$veri['Telefon']."</li>
                </ul>";
              }
          }
        }
    ?>
    </div>
</div>
</form>
</center>
