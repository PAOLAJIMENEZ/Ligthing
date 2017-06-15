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
	color: #FFFFFF;
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
.Estilo32 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #000000;
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
    <td width="1280" height="742"><table width="161">
      <tr>
        <td width="68" height="138" align="center" valign="top"><a href="index.php"><img src="img_inicio.png" border="0" top="0" left="0"/></a></td>
        <td width="81" align="center" valign="top"><a href="index.php"><img src="img_icon_volver.png" /></a></td>
      </tr>
    </table>
      <table width="498" height="479" border="3" align="center" cellspacing="20" bordercolor="#000000">
        <tr>
          <td width="448" height="71"><div align="center" class="Titulo"><span class="TituloForm Estilo24  Estilo30">Modificar cuenta de usuario </span><br />
                  <br />
          </div></td>
        </tr>
        <form id="form1" name="form1" method="post" action="Capa_presentacion_modificarUsuario.php" >
          <tr>
            <td><div align="left" class="Tformulario Estilo23">
                <div align="center">
                  <p class="Estilo31">Documento</p>
                </div>
            </div>
              <div align="center">
                <p>
                  <input name="documento" type="text" id="documento" />
                </p>
                <p>&nbsp; </p>
              </div>
				
				
			  <div align="center">
                <p class="Estilo32">contraseña</p>
              </div>
				
				<div align="center">
                  <p>
                    <input name="contrasena" type="password" id="contrasena" />
                  </p>
                  <p>&nbsp;</p>
                  <p><a href="neg_registrar_cliente.php">
                    <input name="Submit" type="submit" class="btn-warning estilo14" id="Submit" value="Buscar" />
                  </a> </p>
                  <p>&nbsp;</p>
                  <a href="index2.php">Volver
                  </a>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
				</div>
				
				
              </label></td>
          </tr>
        </form>
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
