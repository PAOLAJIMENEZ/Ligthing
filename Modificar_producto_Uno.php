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
	<table width="673" height="534" border="3" bordercolor="#000000" align="center" >
  <tr>
    <td align="center" class="h1 Estilo1"><div align="center" class="Estilo3">
      <p class="Estilo8">Modificar Producto </p>
      <p>&nbsp;</p>
      </div>      <form id="form1" name="form1" method="post" action="Modificar_producto.php" >
        <table width="389" height="41" border="0" align="center" >
          <tr>
            <td><span class="Estilo10">Codigo producto </span></td>
            <td width="197" height="37" align="center"><input name="codigo_producto" type="text" id="codigo_producto"   required="required"/></td>
          </tr>
          </table>
          <label>
            <br />
            <br />
            <br /> <center> <input name="Submit" type="submit" class="Estilo10" id="boton" value="Buscar" /> 
              </center>
          </label>
        <div align="center"></div>
          <p align="center"><a href="index.php" class="Estilo4 Estilo9">regresar al inicio</a> </p>
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