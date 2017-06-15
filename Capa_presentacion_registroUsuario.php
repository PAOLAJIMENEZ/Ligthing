<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
</style>
</head>

<body>
<table width="100%" height="1000" align="center">
  
  
  <tr>
    <td width="1280" height="742" ><table width="161">
      <tr>
        <td width="68" height="138" align="center" valign="top"><a href="index.php"><img src="img_inicio.png" border="0" top="0" left="0"/></a></td>
        <td width="81" align="center" valign="top"><a href="index.php"><img src="img_icon_volver.png" /></a></td>
      </tr>
    </table>
      <table width="553" height="650" border="0" align="center" cellspacing="20" bordercolor="#F0F0F0">
    <tr>
      <td colspan="2"><div align="center" class="Titulo"><span class="TituloForm Estilo24  Estilo30">Crear Cuenta </span><br />
        <br />
      </div></td>
    </tr>
		<form id="form1" name="form1" method="post" action="neg_registrar_usuario.php" >
    <tr><br>
      <td width="264"><div align="left" class="Tformulario Estilo23"><strong>Primer apellido </strong></div></td>
      <td width="279"><div align="left" class="Tformulario Estilo23"><strong>Segundo apellido </strong></div></td>
    </tr>
    <tr>
      <td><label for="label4"></label>
	  
      <input class="apellidos" name="apellido1" type="text" id="label4" size="40" placeholder="Digite primer apellido" required="required"/></td>
      <td><label for="label5"></label>
      <input name="apellido2" type="text" id="label5" size="42"  placeholder="Digite segundo apellido" required="required"/></td>
    </tr>
    <tr>
      <td colspan="2"><div align="left" class="Tformulario Estilo23"><strong>Nombres</strong></div></td>
    </tr>
    <tr>
      <td colspan="2"><label for="textfield"></label>
      <input name="nombres" type="text" id="nombres" size="90" placeholder="Digite nombre" required="required"/></td>
    </tr>
    <tr>
      <td colspan="2"><div align="left" class="Tformulario Estilo23"><strong>Documento</strong></div></td>
    </tr>
    <tr>
      <td colspan="2"><label for="label"></label>
      <input name="documento" type="text" id="label" size="90" placeholder="Digite Documento" required="required"/></td>
    </tr>
    <tr>
      <td colspan="2"><div align="left" class="Tformulario Estilo23"><strong>Contrase&ntilde;a</strong></div></td>
    </tr>
    <tr>
      <td height="20" colspan="2"><label for="label2"></label>
      <input name="contrasena" type="text" id="label2" size="90" placeholder="Digite contrase&ntilde;a" required="required"/></td>
    </tr>
	<tr>
      <td colspan="2"><div align="left" class="Tformulario Estilo23"><strong>Elija su rol</strong></div></td>
    </tr>
	<tr>
      <td height="20" colspan="2"><label for="label2"></label>
        <label for="select"></label>
        <select name="rol" id="rol">
          <option value="Seleccione" selected="selected">Seleccione</option>
          <option value="Administrador">Administrador</option>
          <option value="Invitado">Inivitado</option>
        </select>
        </td>
	</tr>
	 <tr>
      <td colspan="2"><div align="left" class="Tformulario"><strong>Digite el texto 19p</strong></div></td>
    </tr>
	<tr>
      <td height="20" colspan="2"><label for="label2"></label>
      <input name="numero" type="text" id="label2" size="90" placeholder="Digite 19p" required="required"/></td>
    </tr>
      <td height="131" colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Registarme" id="Submit" class="btn-warning"/>
        <br />
        <br />
      </div></td>
    </tr>
    </form>
  </table>
    <p>&nbsp;</p>
    <table width="57" align="center" cellpadding="6">
      <tr>
        <td width="37"><a href="index.php" class="Estilo14">Volver</a></td>
      </tr>
    </table>    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
