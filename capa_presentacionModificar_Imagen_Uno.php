<?php
ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Documento sin t&iacute;tulo</title>

<style type="text/css">
<!--
.Estilo8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 18px; }
.Estilo9 {
	font-size: 16px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
	font-weight: bold;
}
.Estilo10 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
#boton{
background:#FF6600;
color:#000000;
}
-->
</style>
</head>

<body><table width="900" height="588" border="0" align="center" >
  <tr>
    <td colspan="3"> 
	<?php 
	 include ('Banner.php');
	 ?>	
 </td>
  </tr>
  <tr>
    <td colspan="3"><?php
	 include ('MenuOriginal2.php');
	 ?></td>
  </tr>
  <tr >
    <td colspan="3" height="100">
	<p>&nbsp;</p>
	<table width="845" height="382" border="0" align="center">
      <tr>
        <td width="348" height="141"><table width="252" height="178" border="0">
            <tr>
              <td><img src="../Proyecto/img_lampara_mesa1.jpg" width="329" height="428" /></td>
            </tr>
        </table></td>
        <td width="487"><form id="form1" name="form1" method="post" action="Capa_presentacion_Modificar_imagen.php">
            <table width="400" border="0">
              <tr>
                <td width="394" height="53" align="left"><table width="202" border="0" align="center">
                    <tr>
                      <td width="196"><a href="Capa_presentacion_Modificar_imagen.php">
                        <input type="submit" name="Submit2" value="Consultar todas las imagenes" />
                        <label></label>
                      </a></td>
                      </tr>
                  </table>
                    <label></label></td>
              </tr>
            </table>
        </form></td>
      </tr>
    </table>
	<p>&nbsp;</p>
	<p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="3">
	<?php
	include ('Footer.php');
	?>		</td>
  </tr>
</table>

</body>
</html>
<?php
ob_end_flush();
?>