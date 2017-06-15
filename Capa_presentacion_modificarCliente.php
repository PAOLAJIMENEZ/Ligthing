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
}

body
{
background: linear-gradient(to right, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 0%, rgba(120,122,124,1) 100%);
}
.Estilo24 {
	color: #FF8000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 16px;
}
.Estilo25 {font-size: 14px}
.Estilo26 {color: #FFFFFF}
.Estilo27 {
	color: #000000;
	font-weight: bold;
}
</style>
</head>

<body>

<?php
	  
	class cliente
{     
	public function modificar ($documento)
	{
	
	   include ('Conexion.php');
	   $cont="0";

	                    $sql= "select * from cliente where documento='$documento'";
	                                if(!$result=$db->query($sql))
	                                {
	                                    die('Datos no encontrados ����['.$db->error.']');
	                                }
		    while($row = $result -> fetch_assoc())
	        {
									      $apellido1=stripslashes($row["apellido1"]);
										 $_SESSION["apellido1"]=$apellido1;
									
										 
										  $apellido2=stripslashes($row["apellido2"]);
										  $_SESSION["apellido2"]=$apellido2;
										  
						                  $nombres=stripslashes($row["nombres"]);
										   $_SESSION["nombres"]=$nombres;
										   
						                  $documento =stripslashes($row["documento"]);
										   $_SESSION["documento"]=$documento;
										   
										  $correo=stripslashes($row["correo"]);
										   $_SESSION["correo"]=$correo;                   					 			  
				 $cont=$cont+1;
		    }  	
									 
            if($cont=="0")
	          {
	             echo "No se encontraron datos!!";
	          }	 
	}	
}	

	    $nuevo=new cliente();
		$nuevo-> modificar ($_POST["documento"]);						 								 							 								 
?>

<table width="100%" height="1235" align="center">
  <tr>
    <td width="1280" height="236">
	<?php
	include('Banner.php');
	?>	</td>
  </tr>
  
  <tr>
    <td width="1280" height="742"><table width="664" height="685" border="3" align="center" bgcolor="#000000">
      <tr>
        <td><table width="553" height="590" border="0" align="center" cellspacing="20" bordercolor="#F0F0F0">
    <tr>
      <td colspan="2"><div align="center" class="Titulo"><span class="TituloFormulario Estilo24">Registro Cliente </span><br />
        <br />
      </div></td>
    </tr>
		<form id="form1" name="form1" method="post" action="neg_modificar_cliente.php" >
		<tr>
      <td colspan="2"><label for="label"></label>
      <input name="documento" type="hidden" id="label"  value="<?php echo  $_SESSION["documento"];?>"/></td>
    </tr>
    <tr><br>
      <td width="195"><div align="left" class="Tformulario"><strong>Primer apellido </strong></div></td>
      <td width="294"><div align="left" class="Tformulario"><strong>Segundo apellido </strong></div></td>
    </tr>
    <tr>
      <td><label for="label4"></label>
	  
      <input class="apellidos" name="apellido1" type="text" id="label4" size="25" placeholder="Digite primer apellido" required="required" value="<?php echo  $_SESSION["apellido1"];?>"/></td>
      <td><label for="label5"></label>
      <input name="apellido2" type="text" id="label5" size="25"  placeholder="Digite segundo apellido" required="required" value="<?php echo  $_SESSION["apellido2"];?>"/></td>
    </tr>
    <tr>
      <td colspan="2"><div align="left" class="Tformulario"><strong>Nombres</strong></div></td>
    </tr>
    <tr>
      <td colspan="2"><label for="textfield"></label>
      <input name="nombres" type="text" id="nombres" size="25" placeholder="Digite nombre" required="required" value="<?php echo  $_SESSION["nombres"];?>"/></td>
    </tr>
    
    <tr>
      <td colspan="2"><div align="left" class="Tformulario"><strong>Correo</strong></div></td>
    </tr>
    <tr>
      <td colspan="2"><label for="label2"></label>
      <input name="correo" type="email" id="label2" size="25" placeholder="Digite correo" required="required" value="<?php echo  $_SESSION["correo"];?>"/></td>
    </tr>
   <td class="h3 Estilo2  Estilo25 Estilo27">Digite el texto y4 </td>
            <td>
                
                  <div align="justify">
                    <input name="numero" type="text" id="numero" value="" size="25" placeholder="digite y4"pattern="[y4]+"  required />
                </div></td>
    <tr>
      <td colspan="2"><div align="center">
        <p>&nbsp;</p>
        <table width="76" border="0">
          <tr>
            <th width="66" height="47" scope="col">              
			<input name="Submit" type="submit" class="btn-warning" id="Submit" value="Modificar" />            </th>
          </tr>
        </table>
        <div align="center"><a href="index2.php">Volver </a></div>
        <p>&nbsp;</p>
        <table width="181" height="152" border="0" align="center" cellpadding="6">
          <tr>
            <td><p>&nbsp;</p></td>
          </tr>
        </table>
        <br />
        <br />
      </div></td>
    </tr>
    </form>
  </table>
      <p>&nbsp;</p>
        </td>
      </tr>
    </table>
    <p>&nbsp;</p></td>
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
