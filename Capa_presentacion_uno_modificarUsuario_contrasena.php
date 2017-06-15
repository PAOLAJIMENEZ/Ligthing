<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
.Estilo32 {color: #FFFFFF}
.Estilo34 {font-size: 18px; color: #FF8000; font-family: Verdana, Arial, Helvetica, sans-serif;}
</style>
</head>

<body>
<table width="100%" height="1235" align="center">
  <tr>
    <td width="1280" height="236">
	<?php
	include('Banner.php');
	?>	</td>
  </tr>
  
  <tr>
    <td width="1280" height="742">
	
  <?php
	  
	class usuario
{     
	public function modificar ()
	{
	
	   include ('Conexion.php');
	   $cont="0";

	                    $sql= "select * from usuario where documento='$documento' and contrasena='$contrasena'";
	                                if(!$result=$db->query($sql))
	                                {
	                                    die('Datos no encontrados ����['.$db->error.']');
	                                }
		    while($row = $result -> fetch_assoc())
	        {
			 
			                              $documento =stripslashes($row["documento"]);
										   $_SESSION["documento"]=$documento;
										   
			
									      $apellido1=stripslashes($row["apellido1"]);
										 $_SESSION["apellido1"]=$apellido1;
									
										 
										  $apellido2=stripslashes($row["apellido2"]);
										  $_SESSION["apellido2"]=$apellido2;
										  
						                  $nombres=stripslashes($row["nombres"]);
										   $_SESSION["nombres"]=$nombres;
										   
						               
										  $contrasena=stripslashes($row["contrasena"]);
										   $_SESSION["contrasena"]=$contrasena; 
										    
										    $fk_rol_usuario=stripslashes($row["fk_rol_usuario"]);
										   $_SESSION["fk_rol_usuario"]=$fk_rol_usuario; 
										   
										    
		                          $sql2= "select * from rol_usuario where id_rol='$fk_rol_usuario'";
	                                if(!$result2=$db->query($sql2))
	                                {
	                                    die('Datos no encontrados ����['.$db->error.']');
	                                }
									   while($row2 = $result2 -> fetch_assoc())
	                                 {
										$rol=stripslashes($row2["rol"]);
										 $_SESSION["rol"]=$rol;
						             }                					 			  
				 $cont=$cont+1;
		    }  	
									 
            if($cont=="0")
	          {
	             echo "No se encontraron datos!!";
	          }	 
	}	
}	

	    $nuevo=new usuario();					 								 							 								 
?>
</p>

  
  <table width="50%" height="779" align="center" border="3">
  
  
  <tr>
    <td width="1280" height="769" bordercolor="#000000" ><p>&nbsp;</p>
      <table width="120" height="49">
      <tr>
        <td width="68" height="43" align="center" valign="top"><a href="index.php"><img src="img_inicio.png" border="0" top="0" left="0"/></a></td>
        <td width="81" align="center" valign="top"><a href="index.php"><img src="img_icon_volver.png" /></a></td>
      </tr>
    </table>
	
      <table width="368" height="711"  align="center" cellspacing="20"  >
	  
      
    <tr>
      <td colspan="7"><div align="center" class="Titulo"><strong><span class="TituloForm Estilo24  Estilo34">Modificar cuenta de usuario</span><br />
            <br />
      </strong></div></td>
    </tr>
    <tr><br>
      <td width="276"><div align="left" class="Tformulario Estilo23"><strong>Documento</strong></div></td>
    </tr>
	 <form id="form1" name="form1" method="post" action="neg_modificarUsuario_contrasena.php" >
	 <tr>
      <td><label for="label5"></label>
      <input name="documento" type="text" id="label5" size="35"  placeholder="Digite documento" value="" required="required"/></td>
    </tr>

	<tr>
	<td width="276"><div align="left" class="Tformulario Estilo23"><strong>Contrase&ntilde;a actual </strong></div></td>
	</tr>
	
    <tr>
      <td><label for="label4"></label>
	  	<input class="contrasena" name="contrasena" type="password" id="label4" size="35" placeholder="Digite contraseña" value="" required="required"/>	  </td>
    </tr>
    <tr>
      <td colspan="7"><div align="left" class="Tformulario Estilo23"><strong>Ingrese nueva contrase&ntilde;a </strong></div></td>
    </tr>
    <tr>
      <td colspan="7"><label for="textfield"></label>
      <input name="nuevacontrasena" type="password" id="nuevacontrasena" size="35" placeholder="Digite nueva contraseña" value="" required="required"/></td>
    </tr>
    
     <tr>
      <td colspan="7"><div align="left" class="Tformulario Estilo23"><strong>Repita su  nueva contrase&ntilde;a </strong></div></td>
    </tr>
    <tr>

      <td colspan="7"><label for="textfield"></label>
      <input name="nuevacontrasena2" type="password" id="nuevacontrasena2" size="35" placeholder="Digite nuevamente la nueva contraseña" value="" required="required"/></td>
    </tr>
	 <tr>
      <td colspan="7"><div align="left" class="Tformulario"><strong>Digite el texto 19p</strong></div></td>
    </tr>
	<tr>
      <td height="20" colspan="7"><label for="label2"></label>
      <input name="numero" type="text" id="label2" size="35" placeholder="Digite 19p" required="required"/></td>
    </tr>
      <td height="131" colspan="7"><div align="center">
        <p>&nbsp;          </p>
        <p>
          <input type="submit" name="Submit" value="Actualizar" id="Submit" class="btn-warning"/>
        </p>
        <p><a href="index2.php">Volver</a></p>
        <p><br />
          <br />
          </p>
      </div></td>
    </tr>
	<td height="2"></form>
  </table>
      </td>
  </tr>
</table>
  <p>&nbsp;</p></td>
  </tr>
	</td>
  </tr>

  <tr>
    <td width="1280" height="197">
	<?php
	include ('Footer.php');
	?>	</td>
  </tr>
</table>
</body>
</html>

