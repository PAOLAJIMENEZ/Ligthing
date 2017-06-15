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
.Estilo31 {
	color: #000000;
	font-weight: bold;
}
.Estilo32 {color: #FFFFFF}
</style>
</head>

<body>
<table width="100%" height="773" align="center">
  <tr>
    <td width="1280" height="236">
	<?php
	include('Banner.php');
	?>	</td>
  </tr>
  
  <tr>
    <td width="1280" height="325"><table width="574" height="64" border="3" align="center" bgcolor="#000000">
      <tr>
        <td class="h1 Estilo3"><div align="center">
          <p>&nbsp;            </p>
          <p>
            <?php
	  
	class usuario
{     
	public function modificar ($documento,$contrasena,$nuevacontrasena,$nuevacontrasena2,$numero)
	{
	
	   include ('Conexion.php');
	   $cont="0";

	           if($numero=="19p")
			   {
			            $sql= "select * from usuario where documento='$documento' and contrasena='$contrasena'";
	                                if(!$result=$db->query($sql))
	                                {
	                                    die('Datos no encontrados ����['.$db->error.']');
	                                }
		     while($row = $result -> fetch_assoc())
	        {
			 
			                              $documento =stripslashes($row["documento"]);
               
										  $contrasena=stripslashes($row["contrasena"]);

		                        if($nuevacontrasena==$nuevacontrasena2)
								{
								
								  mysqli_query($db,"UPDATE usuario SET contrasena='$nuevacontrasena' WHERE documento='$documento'")
		                          or die (mysqli_error($db)); 	
								  
								  echo "Cambio de contraseña realizada";	
								  				 
								}
								
								if($nuevacontrasena!=$nuevacontrasena2)
								{
									 echo "Contraseñas distintas";								  				 
								}
								
								             					 			  
				 $cont=$cont+1;
		      }  	
			}
									 
            if ($numero!="19p" & $cont=="0")
		 {
		   echo "Error en los datos introducidos </br>";
		 }	
	}	
}	

	    $nuevo=new usuario();
		$nuevo-> modificar ($_POST["documento"],$_POST["contrasena"],$_POST["nuevacontrasena"],$_POST["nuevacontrasena2"],$_POST["numero"]);						 								 							 								 
?>
          </p>
          <p>&nbsp;</p>
          <table width="57" align="center" cellpadding="6" class="btn-warning">
            <tr>
              <td width="37"><a href="index.php" class="Estilo14 Estilo32">Volver</a></td>
            </tr>
          </table>
          <p>&nbsp;  </p>
        </div>          </td>
      </tr>
    </table>
	
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

