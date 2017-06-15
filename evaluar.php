<?php
session_start();
$documento=$_POST["documento"];
$contrasena=$_POST["contrasena"];
$cont="0";
include('conexion.php');

$sql= "select* from usuario where documento='$documento' and contrasena='$contrasena'";
 if(!$result = $db->query($sql))
 {
 die ('Datos no encontrados!!!['. $db->error . ']');
 }
 while ($row = $result ->fetch_assoc())
 {
 $ddocumento=stripslashes($row["documento"]);
 $cont=$cont+1;
 }
 
 if ($cont=="0")
 {
     header ("Location:Capa_presentacion_login.php");
 }
 if($cont!="0")
 {
  	header("Location:index2.php ");
	$_SESSION['autorizado']="1";
	$_SESSION['usuarioactual']=$documento;
	
 }
?>