
<?php
session_start();
 if($_SESSION['autorizado']!="1")
 {
    header("Location: Capa_presentacion_login.php");
 }
?>