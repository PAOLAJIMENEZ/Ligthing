<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css" />

<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo14 {
	font-size: 18px;
	font-weight: bold;
	color: #FF8000;
}
-->
body{
background: linear-gradient(to right, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 0%, rgba(120,122,124,1) 100%);
}
.Estilo23 {font-family: Verdana, Arial, Helvetica, sans-serif}
.Estilo30 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #FF8000;
	font-weight: bold;
}
.Estilo31 {
	color: #000000;
	font-weight: bold;
}
.Estilo32 {color: #FFFFFF}
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
	<table width="574" height="64" border="3" align="center" bordercolor="#000000" >
  
  <tr>
    <td >
	

<table width="574" height="64" align="center">
  <tr>
    <td class="h1 Estilo3">
	<center>
	  <p>&nbsp;	    </p>
	  <p>
	    <?php
	 
	 
 class usuario
{

		
          
	public function modificar ($documento,$apellido1,$apellido2,$nombres,$fk_rol_usuario,$numero)
	{
		
	  include ('Conexion.php');
	
		 // capa datos
		
		 if ($numero=="19p")
		 {		

			              mysqli_query($db,"UPDATE usuario SET apellido1='$apellido1' WHERE documento='$documento'")
		                  or die (mysqli_error($db));
		                
		                mysqli_query($db,"UPDATE usuario SET apellido2='$apellido2' WHERE documento='$documento'")
		                or die (mysqli_error($db));
		               
		
	                  
		                mysqli_query($db,"UPDATE usuario SET nombres='$nombres' WHERE documento='$documento'")
		                or die (mysqli_error($db));
		                
		              
		                
		                mysqli_query($db,"UPDATE usuario SET fk_rol_usuario='$fk_rol_usuario' WHERE documento='$documento'")
		                or die (mysqli_error($db));
		                  
  
		    echo "Los datos se han modificado correctamente </br>";
		 }
		 
		 
		 if ($numero!="19p")
		 {
		   echo "Error en los datos introducidos </br>";
		 }			  
   }

}
		$nuevo=new usuario();
		 $nuevo-> modificar($_POST["documento"],$_POST["apellido1"],$_POST["apellido2"], $_POST["nombres"],$_POST["fk_rol_usuario"],$_POST["numero"]);
 ?> 
	    </p>
	  <p>&nbsp;</p>
	  <table width="57" align="center" cellpadding="6" class="btn-warning">
        <tr>
          <td width="37"><a href="index.php" class="Estilo14 Estilo32">Volver</a></td>
        </tr>
      </table>
	  <p>&nbsp;  </p>
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
