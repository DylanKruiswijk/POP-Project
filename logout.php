<?php
session_start(); //Sessie starten
session_destroy(); //Vernietigen, en uitgelogd
header("location:login.php");
echo "Succesvol uitgelogd";
?>