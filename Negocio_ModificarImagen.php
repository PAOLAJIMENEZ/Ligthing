
<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="Estilos.css" rel="stylesheet" type="text/css" />
<title>Documento sin t&iacute;tulo</title>
<link href="*" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {font-size: 24px}
.Estilo4 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo2 {font-size: 18pt}
-->
</style>
</head>

<body>
<table width="100%" height="948" align="center">
  <tr>
    <td width="1280" height="222"><?php
	include('Banner.php');
	?>
    </td>
  </tr>
  <tr>
    <td width="1280" height="62"><?php
	include('MenuOriginal2.php');
	?>
    </td>
  </tr>
  <tr>
    <td width="1280" height="454"><p>&nbsp;</p>
        <table width="707" border="0" align="center">
          <tr>
            <td width="355"><center>
              <img src="img_bien_echo_modificar.jpg" width="340" height="340" />
            </center></td>
            <td width="342"><div align="center">
              <?php
	 
	 
 class producto
{

		
          
	public function modificarImagen ($imagen,$numero)
	{

	  include ('conexion.php');
	
		 // capa datos
		
		 if ($numero=="y4")
		 {		
	
		 	if($imagen!="No_Modificar")
			{	
			mysqli_query($db,"UPDATE producto SET imagen='$imagen' WHERE imagen='$imagen'")
		 or die (mysqli_error($db));
		 
		 header ('Location: Capa_presentacion_Modificar_imagen.php');
		}

		 echo "La imagen se han modificado correctamente </br>";
		 }
		 if ($numero!="y4")
		 {
		   echo "no se modico la imagen </br>";
		 }	
  
   }

}
		$nuevo=new producto();
		 $nuevo-> modificarImagen($_POST["imagen"],$_POST["numero"]);
		  
		 
		 ?>
            </div>
              <p>&nbsp;</p>
              <form id="form1" name="form1" method="post" action="">
                <label>
                <div align="center"><a href="index.php">Regresar al inicio </a></div>
                </label>
                <div align="center"><br />
                    <a href="Capa_presentacion_registrar_producto.php">Registrar otro producto</a>                  </div>
              </form>
            <p>&nbsp;</p></td>
          </tr>
          <tr>
            <th scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp; </p>
      <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="1280" height="197"><?php
	include ('Footer.php');
	?>
    </td>
  </tr>
</table>
</body>
</html>
<?php
ob_end_flush();
?>