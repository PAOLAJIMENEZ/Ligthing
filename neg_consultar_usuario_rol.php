<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lighting</title>
<style type="text/css">
body{
background: linear-gradient(to right, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 0%, rgba(120,122,124,1) 100%);
}
</style>
</head>

<body>
<table width="100%" height="1001" align="center" >
  <tr>
    <td width="1280" height="236">
	<?php
	include('Banner.php');
	?>	</td>
  </tr>
  <tr>
    <td width="1280" height="43">
	<?php
	include('MenuOriginal.php');
	?>
	</td>
  </tr>
  <tr>
    <td width="1280" height="541">
	<?php
 
 class Usuario{
 
 public function consultarUsuarios($rol_usuario)
 {
 	include ('conexion.php');
		
	
	$sql="SELECT * FROM usuario WHERE fk_rol_usuario='$rol_usuario'";
			if (!$result = $db->query($sql))
			{
		     	die ('Datos no Encontrados!!! ['.$db->error.']');
			}
		echo"<table width=900 border=1 class=table-hover aling=center>";
  		echo"<tr>";
		echo"<td>Rol</td>";
    	echo"<td >Documento</td>";
    	echo"<td >Nombres</td>";   		
		echo"<td>Apellidos</td>";
		echo"<td >Contraseña</td>";				
  		echo"</tr>";
		
			while ($row = $result->fetch_assoc())
			{
				$ddocumento= stripslashes($row["documento"]);
				$nnombres= stripslashes($row["nombres"]);
				$aapellido1= stripslashes($row["apellido1"]);
				$aapellido2= stripslashes($row["apellido2"]);
				$ccontrasena= stripslashes($row["contrasena"]);
				$apellidos=$aapellido1."-".$aapellido2;
				
				
		//subconsulta
		
	$sql2="SELECT * FROM rol_usuario WHERE id_rol='$rol_usuario'";
			if (!$result2 = $db->query($sql2))
			{
		     	die ('Datos no Encontrados!!! ['.$db->error.']');
			}
			while ($row2 = $result2->fetch_assoc())
			{
				$rrol= stripslashes($row2["rol"]);
			}	
				
				
				
		echo"<tr>";
		echo"<td>$rrol</td>";
    	echo"<td>$ddocumento</td>";
    	echo"<td>$nnombres</td>";
    	echo"<td>$apellidos</td>";
		echo"<td>$ccontrasena</td>";	
  		echo"</tr>"; 
				
			}//fin while
		
			echo"</table>";
				
  		
 
 	}//fin met
 }//fin class
 $nuevo= new Usuario();
 $nuevo-> consultarUsuarios($_POST['rol_usuario']); 
 ?>
 	</td>
  </tr>
  <tr>
    <td width="1280" height="169">
	<?php
	include ('Footer.php');
	?>	</td>
  </tr>
</table>
</body>
</html>
