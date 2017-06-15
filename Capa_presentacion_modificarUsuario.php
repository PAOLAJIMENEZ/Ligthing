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
.Estilo30 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #FF8000;
	font-weight: bold;
}
.Estilo31 {color: #FFFFFF}
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
      <p>
	  <?php
	  
	class usuario
{     
	public function modificar ($documento,$contrasena)
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
		$nuevo-> modificar ($_POST["documento"],$_POST["contrasena"]);						 								 							 								 
?>
<table width="100%" height="896" align="center">
  
  
  <tr>
    <td height="890" ><table width="664" height="685" border="3" align="center" bordercolor="#000000">
        <tr>
          <td width="264"> <table width="161">
            <tr>
              <td width="68" height="138" align="center" valign="top"><a href="index.php"><img src="img_inicio.png" border="0" top="0" left="0"/></a></td>
              <td width="81" align="center" valign="top"><a href="index.php"><img src="img_icon_volver.png" /></a></td>
            </tr>
          </table>
            <table width="553" height="650" border="0" align="center" cellspacing="20" bordercolor="#F0F0F0">
            <tr>
              <td colspan="2"><div align="center" class="Titulo"><span class="TituloForm Estilo24  Estilo30">Modificar cuenta de usuario</span><br />
                      <br />
              </div></td>
            </tr>
            <form id="form1" name="form1" method="post" action="neg_modificar_usuario.php" >
              <tr>
                <td colspan="2"><label for="label"></label>
                    <input name="documento" type="hidden"  value="<?php echo  $_SESSION["documento"];?>" /></td>
              </tr>
              <tr><br />
                  <td width="264"><div align="left" class="Tformulario Estilo23"><strong>Primer apellido </strong></div></td>
                <td width="279"><div align="left" class="Tformulario Estilo23"><strong>Segundo apellido </strong></div></td>
              </tr>
              <tr>
                <td><label for="label4"></label>
                    <input class="apellidos" name="apellido1" type="text" id="label4" size="25" placeholder="Digite primer apellido" value="<?php echo  $_SESSION["apellido1"];?>" required="required"/></td>
                <td><label for="label5"></label>
                    <input name="apellido2" type="text" id="label5" size="25"  placeholder="Digite segundo apellido" value="<?php echo  $_SESSION["apellido2"];?>" required="required"/></td>
              </tr>
              <tr>
                <td colspan="2"><div align="left" class="Tformulario Estilo23"><strong>Nombres</strong></div></td>
              </tr>
              <tr>
                <td colspan="2"><label for="textfield"></label>
                    <input name="nombres" type="text" id="nombres" size="25" placeholder="Digite nombre" value="<?php echo  $_SESSION["nombres"];?>" required="required"/></td>
              </tr>
              <tr>
                <td colspan="2"><div align="left" class="Tformulario Estilo23"><strong>Elija su rol</strong></div></td>
              </tr>
              <tr>
                <td height="20" colspan="2"><label for="label2"></label>
                    <label for="select"></label>
                    <select name="fk_rol_usuario" id="fk_rol_usuario">
                      <option value="<?php echo  $_SESSION["fk_rol_usuario"];?>"><?php echo  $_SESSION["rol"];?></option>
                      <option value="1">Administrador</option>
                      <option value="2">Empleado</option>
                    </select>
                </td>
              </tr>
              <tr>
                <td colspan="2"><div align="left" class="Tformulario"><strong>Digite el texto 19p</strong></div></td>
              </tr>
              <tr>
                <td height="20" colspan="2"><label for="label2"></label>
                    <input name="numero" type="text" id="label2" size="25" placeholder="Digite 19p" required="required"/></td>
              </tr>
         
            <tr>
              <td height="131" colspan="2"><div align="center">
                  <p>&nbsp;</p>
                <p>
                    <input type="submit" name="Submit2" value="Actualizar" id="Submit2" class="btn-warning"/>
                  </p>
                <p><a href="index2.php">Volver </a></p>
                <p><br />
                      <br />
                  </p>
              </div></td>
            </tr>  </form>
          </table></td>
        </tr>
      </table>
    
    </tr>
</table>
	  
	  </p>
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