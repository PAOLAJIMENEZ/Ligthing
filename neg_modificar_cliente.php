<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css" />

<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
-->
body{
background: linear-gradient(to right, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 0%, rgba(120,122,124,1) 100%);
}
.Estilo3 {font-size: 14px}
</style>
</head>

<body>
<table width="100%" height="948" align="center" bgcolor="#848484">
  <tr>
    <td width="1280" height="222">
	<?php
	include('Banner.php');
	?>	</td>
  </tr>
  <tr>
    <td width="1280" height="62">
	<?php
	include('MenuOriginal2.php');
	?>	</td>
  </tr>
  <tr>
    <td width="1280" height="454">
	<table width="596" height="60" border="0" align="center" bordercolor="#000000">
      <tr>
        <td width="343" class="h1 Estilo3"><center>
            <p><img src="img_bien_echo_modificar.jpg" width="340" height="340" /></p>
          </center></td>
        <td width="301" class="h1 Estilo3"><p align="center">&nbsp;
          </p>
          <table width="183" height="273" border="0" align="center">
            <tr>
              <th width="177" scope="col"> <?php
	 
	 
 class cliente
{

		
          
	public function modificar ($apellido1,$apellido2,$nombres,$documento,$correo,$numero)
	{
		
	  include ('Conexion.php');
	
		 // capa datos
		
		 if ($numero=="y4")
		 {		
	 
		 	if($apellido1!="No_Modificar")
			{	
			mysqli_query($db,"UPDATE cliente SET apellido1='$apellido1' WHERE documento='$documento'")
		 or die (mysqli_error($db));
		}
		
		if($apellido2!="No_Modificar")
			{
		   mysqli_query($db,"UPDATE cliente SET apellido2='$apellido2' WHERE documento='$documento'")
		 or die (mysqli_error($db));
		}
		
		if($nombres!="No_Modificar")
			{
		 mysqli_query($db,"UPDATE cliente SET nombres='$nombres' WHERE documento='$documento'")
		 or die (mysqli_error($db));
		 }
		
		if($correo!="No_Modificar")
			{
		 mysqli_query($db,"UPDATE cliente SET correo='$correo' WHERE documento='$documento'")
		 or die (mysqli_error($db));
		 }
 
		 echo "Los datos se han modificado correctamente </br>";
		 }
		 if ($numero!="y4")
		 {
		   echo "Error en los datos introducidos </br>";
		 }			  
   }

}
		$nuevo=new cliente();
		 $nuevo-> modificar($_POST["apellido1"],$_POST["apellido2"], $_POST["nombres"],$_POST["documento"],$_POST["correo"],$_POST["numero"]);
		  
		 
		 ?>
                <div align="justify"></div></th>
            </tr>
          </table>
          <p align="center" class="Estilo34"><a href="index2.php">Volver</a></p>
          <p></p></td>
      </tr>
    </table>
	<p>&nbsp;</p>
	<p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="1280" height="197">
	<?php
	include ('Footer.php');
	?>
	
	</td>
  </tr>
</table>
</body>
</html>
