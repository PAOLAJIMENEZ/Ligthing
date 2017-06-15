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
    <td width="1280" height="742"><table width="553" height="590" border="0" align="center" cellspacing="20" bordercolor="#F0F0F0">
    <tr>
      <td colspan="2"><div align="center" class="Titulo"><span class="TituloFormulario Estilo24">Registro Cliente </span><br />
        <br />
      </div></td>
    </tr>
		<form id="form1" name="form1" method="post" action="neg_registrar_cliente.php" >
    <tr><br>
      <td width="264"><div align="left" class="Tformulario"><strong>Primer apellido </strong></div></td>
      <td width="279"><div align="left" class="Tformulario"><strong>Segundo apellido </strong></div></td>
    </tr>
    <tr>
      <td><label for="label4"></label>
	  
      <input class="apellidos" name="apellido1" type="text" id="label4" size="40" placeholder="Digite primer apellido" required="required"/></td>
      <td><label for="label5"></label>
      <input name="apellido2" type="text" id="label5" size="42"  placeholder="Digite segundo apellido" required="required"/></td>
    </tr>
    <tr>
      <td colspan="2"><div align="left" class="Tformulario"><strong>Nombres</strong></div></td>
    </tr>
    <tr>
      <td colspan="2"><label for="textfield"></label>
      <input name="nombres" type="text" id="nombres" size="90" placeholder="Digite nombre" required="required"/></td>
    </tr>
    <tr>
      <td colspan="2"><div align="left" class="Tformulario"><strong>Documento</strong></div></td>
    </tr>
    <tr>
      <td colspan="2"><label for="label"></label>
      <input name="documento" type="text" id="label" size="90" placeholder="Digite Documento" required="required"/></td>
    </tr>
    <tr>
      <td colspan="2"><div align="left" class="Tformulario"><strong>Correo</strong></div></td>
    </tr>
    <tr>
      <td colspan="2"><label for="label2"></label>
      <input name="correo" type="email" id="label2" size="90" placeholder="Digite correo" required="required"/></td>
    </tr>
   
    <tr>
      <td colspan="2"><div align="center">
        <table width="100" border="0" cellpadding="6">
          <tr>
            <td><a href="neg_registrar_cliente.php">
              <input name="Submit" type="submit" class="btn-warning" id="Submit" value="Registarme" />
            </a></td>
          </tr>
        </table>
        <br />
        <br />
      </div></td>
    </tr>
    </form>
  </table>
      <p>&nbsp;</p>
      <table width="66" align="center" cellpadding="6">
        <tr>
          <td width="48"><a href="index2.php" class="Estilo14">Volver</a></td>
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
