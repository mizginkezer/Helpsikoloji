<?php
    session_start();
    if(session_destroy())
    {
    header("Location: kullanici_giris.php");
    }
?>