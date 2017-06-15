<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
body{
background: linear-gradient(to right, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 0%, rgba(120,122,124,1) 100%);
}
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
	<p>&nbsp;</p>
	<table width="673" height="534" border="1" align="center" bordercolor="#FFFFFF" >
  
  <tr>
    <td>
	

<table width="673" height="295" align="center">
  <tr>
    <td height="98" class="h1 Estilo1"><div align="center">Formulario Personal </div></td>
  </tr>
  <tr>
    <td>
	<center>
	 <?php
		 
		 
class cliente
{
           
	public function registrarCliente($documento,$nombres,$apellido1,$apellido2,$correo)
	{
	include ('conexion.php');
		 $cont="0";
		 // capa datos
		
		  
		  
		  $this->documento=$documento;
	$this->nombres=$nombres;
	$this->apellido1=$apellido1;
	$this->apellido2=$apellido2;
	$this->correo=$correo;
	
	
	
	
	mysqli_query($db,"INSERT INTO cliente(documento, nombres, apellido1,apellido2,correo) VALUES('$documento','$nombres','$apellido1','$apellido2','$correo')")
	or die (mysqli_error ($db));
	echo "Datos registrados correctamente";
	

		
	}
	
	}// termina la clase 
	
	$objeto= new Cliente ();
	$objeto->registrarCliente($_POST["documento"], $_POST["nombres"], $_POST["apellido1"], $_POST["apellido2"], $_POST["correo"]);
	
		 ?>
	</center>    </td>
  </tr>
</table>    </td>
  </tr>
</table>
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
