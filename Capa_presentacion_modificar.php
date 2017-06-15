<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
body{
background: linear-gradient(to right, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 0%, rgba(120,122,124,1) 100%);
}
</style>
</head>

<body>
<table width="100%" height="948" align="center" >
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
    <td width="1280" height="454"><p>&nbsp;</p>
    <table width="673" height="534" border="1" align="center" bordercolor="#FFFFFF" >
  <tr>
    <td height="98" class="h1 Estilo1"><div align="center">Modificar Producto </div></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="Modificar_producto.php" >
       <table width="389" height="41" border="0" align="center" class="progress-bar-striped" >
        <tr>
          <td width="182" height="37">Codigo producto </td>
          <td width="197" height="37"><input name="codigo_producto" type="text" id="codigo_producto"   required="required"/></td>
        </tr>
      </table>
        <label>
        <br /> <center> <input name="Submit" type="submit" class="btn-primary" value="Buscar" /> 
        </center>
        </label>
        <p align="center"><a href="index.php">regresar al inicio</a> </p>
    </form>
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
