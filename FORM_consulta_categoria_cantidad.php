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
	<form id="form1" name="form1" method="post" action="neg_consultar_categoria_cantidad.php">
     <label></label>
     <p>
       <label> </label>
       <label></label>
     </p>
      <table summary="" width="419" height="82" border="0" align="center">
        <tr>
          <td width="283" height="29">Seleccione la Categoria : </td>
          <td width="126"><label>
          <select name="categoria" id="categoria">
            <option value="Seleccione">Seleccione</option>
            <option value="1">Lampara</option>
            <option value="2">Repuesto</option>
            <option value="3">Linea Acero</option>
            <option value="4">Linea Electrica</option>
              </select>
          </label></td>
        </tr>
        <tr>
          <td height="47" colspan="2"><div align="center">
            <table width="88" border="0">
              <tr>
                <td>                  <a href="neg_consultar_categoria_cantidad.php">
                  <input name="Consultar" type="submit" id="Consultar" value="Consultar" class="btn-success"/>                
                  </a></td>
              </tr>
            </table>
            </div></td>
        </tr>
      </table>
   </form>	</td>
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
