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
	include('MenuOriginal2.php');
	?>
	</td>
  </tr>
  <tr>
    <td width="1280" height="541">
	<table width="900" border="0" align="center">
     <tr>
       <td width="406"><img src="img_users.png" width="313" height="277" /></td>
       <td width="478"> <div align="center">
         <?php
 
 class Usuario{
 
 public function consultarUsuarios()
 {
 	include ('conexion.php');
		
	
	$sql="SELECT * FROM usuario JOIN rol_usuario ON usuario.fk_rol_usuario = rol_usuario.id_rol";
			if (!$result = $db->query($sql))
			{
		     	die ('Datos no Encontrados!!! ['.$db->error.']');
			}
		echo"<table width=900 border=1 class=table-hover aling=center>";
  		echo"<tr>";
    	echo"<td >Documento</td>";
    	echo"<td >Nombres</td>";   		
		echo"<td>Apellidos</td>";
		echo"<td >Contraseña</td>";	
		echo"<td >Rol</td>";				
  		echo"</tr>";
		
			while ($row = $result->fetch_assoc())
			{
		    	$ddocumento= stripslashes($row["documento"]);
				$nnombres= stripslashes($row["nombres"]);
				$aapellido1= stripslashes($row["apellido1"]);
				$aapellido2= stripslashes($row["apellido2"]);
				$ccontrasena= stripslashes($row["contrasena"]);
				$rrol= stripslashes($row["rol"]);
				$apellidos=$aapellido1."-".$aapellido2;
				
				
				
		echo"<tr>";
    	echo"<td>$ddocumento</td>";
    	echo"<td>$nnombres</td>";
    	echo"<td>$apellidos</td>";
		echo"<td>$ccontrasena</td>";
		echo"<td>$rrol</td>";	
  		echo"</tr>"; 
				
			}//fin while
		
			echo"</table>";
				
  		
 
 	}//fin met
 }//fin class
 $nuevo= new Usuario();
 $nuevo-> consultarUsuarios(); 
 ?>
       </div></td>
     </tr>
   </table>
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
