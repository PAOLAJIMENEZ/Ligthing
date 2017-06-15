<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo3 {
	color: #000000;
	font-size: 18px;
	
}
body {
background: linear-gradient(to right, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 0%, rgba(120,122,124,1) 100%);
}
.Estilo9 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #000000; font-weight: bold; font-size: 18px; }
.Estilo10 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #FF8000; font-weight: bold; font-size: 16px; }
.Estilo11 {
	color: #000000;
	font-weight: bold;
}
.Estilo12 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #000000; font-weight: bold; font-size: 16px; }
.Estilo13 {color: #000000}
.Estilo14 {
	color: #010101;
	font-size: 12px;
}
</style>
</head>
<link href="bootstrap.css" rel="stylesheet" type="text/css" />
<body>
<table width="100%" height="1517" align="center"  >
  <tr>
    <td width="1280" height="236">
	<?php
	include('Banner.php');
	?>	</td>
  </tr>
  <tr>
    <td width="1280" height="46">
	<?php
	include('MenuOriginal2.php');
	?>	</td>
  </tr>
  <tr>
    <td height="917" align="center"><form action="neg_registrar_producto.php" method="post" enctype="multipart/form-data" name="form1" id="form1" >
       <table width="1116" border="3" bgcolor="#000000">
         <tr>
           <td width="1102" height="697" align="center"> <table id="tablaform" width="707" height="503" border="0" align="center" >
        <tr>
          <td height="84" colspan="4" align="center"><span class="Estilo3">Registro Producto </span></td>
        </tr>
        <tr>
          <td height="32" class="Estilo12">Codigo            </td>
          <td height="32" align="center" class="Estilo10"><input name="codigo_producto" type="text" id="codigo_producto" value=""   required placeholder="Codigo del producto"/></td>
          <td class="btn-lg"><span class="Estilo12">Nombre</span></td>
          <td class="btn-lg"><input name="nombreP" type="text" id="nombreP" value="" pattern="[a-z&aacute;&eacute;&iacute;&oacute;&uacute;&ntilde;A-Z&Aacute;&Eacute;&Iacute;&Oacute;&Uacute;&Ntilde; ]+" required="required" placeholder="Nombre del producto"/></td>
        </tr>
        <tr>
          <td width="127" height="36" align="left" class="Estilo12">Categoria</td>
          <td align="left" class="btn-lg"><label>
            <select name="fk_categoria" size="1" id="fk_categoria" required>
              <option value=" " selected="selected"  placeholder="Digite la categoria del producto" >Seleccione:</option>
              <option value="1">Lampara</option>
              <option value="2">Repuesto</option>
              <option value="3">Linea de Acero</option>
              <option value="4">Linea El&eacute;ctrica</option>
            </select>
          </label></td>
          <td align="left" class="btn-lg"><span class="Estilo12">Tipo producto</span></td>
          <td align="left" class="btn-lg"><select name="fk_tipo_producto" size="1" id="fk_tipo_producto" required>
              <option value="" selected="selected" >Seleccione:</option>
              <option value="1">Lampara de techo</option>
              <option value="2">Lampara colgante</option>
              <option value="3">Lampara de sobremesa</option>
              <option value="4">Lampara de pared</option>
              <option value="5">Lampara de pie</option>
            </select></td>
        </tr>
        <tr>
          <td height="34" class="Estilo12">Material</td>
          <td colspan="3" class="btn-lg"><label>
          <select name="fk_material" id="fk_material" required>
              <option selected="selected"  value="" >Seleccione:</option>
              <option value="1">Cristal</option>
              <option value="2">Madera</option>
              <option value="3">Marmol</option>
              <option value="4">Crom</option>
              <option value="5">Acero</option>
              <option value="6">Vidrio</option>
              <option value="7">Bronce</option>
              </select>
          </label></td>
          </tr>
        <tr>
          <td height="26" class="h3"><label class="Estilo12">Tama&ntilde;o</label></td>
          <td width="150" height="26" class="btn-lg"><input name="tamanio" type="text" id="tamanio" value="" pattern="[0-9]+" required="required" placeholder="Tama&ntilde;o del producto"/></td>
          <td width="165" class="btn-lg"><span class="Estilo12">Medida</span></td>
          <td width="247" class="btn-lg"><select name="fk_medida" id="fk_medida" required="required">
            <option selected="selected" value="" >Seleccione:</option>
            <option value="1">Cm</option>
            <option value="2">M</option>
          </select></td>
        </tr>
        <tr>
          <td height="32" class="Estilo12">Cantidad</td>
          <td colspan="3" class="btn-lg"><input name="cantidad" type="text" id="cantidad" value=""  pattern="[0-9]+" required placeholder="Digite la cantidad "/></td>
          </tr>
        <tr>
          <td height="32" class="Estilo10"><div align="left" class="Estilo13">Precio  
            
          </div></td>
          <td height="32" align="center" class="Estilo10"><input name="precio" type="text" id="precio" value="" pattern="[0-9]+" required="required" placeholder="Precio del producto" /></td>
          <td class="btn-lg Estilo11">Garantia</td>
          <td class="btn-lg"><input name="garantia" type="text" id="garantia" value=""  required="required" placeholder="Garantia del producto"/></td>
        </tr>
        <tr>
          <td height="32" class="Estilo12">Estado</td>
          <td class="btn-lg"><select name="fk_estado" id="fk_estado" required="required">
            <option selected="selected"   value="" >Seleccione:</option>
            <option value="1">Disponible</option>
          </select></td>
          <td class="btn-lg"><span class="Estilo12">Descripcion</span></td>
          <td class="btn-lg"><textarea name="descripcion" cols="20" id="descripcion"></textarea></td>
        </tr>
        <tr>
          <td height="88" colspan="4" align="center" class="Estilo10"><p>&nbsp;</p>
             <table width="631" border="0">
              <tr>
                <th width="283" scope="col"><span class="Estilo14">Seleccione la imagen del producto </span></th>
                <th width="338" scope="col" class="Estilo14"><input name="imagen" type="file" id="imagen" /></th>
              </tr>
            </table>
            <p>
              <label><br />
              <br />
              </label>
            </p>
            <p><span class="Estilo13">Digite el texto (y4)</span> <span class="btn-lg">
              <input name="numero" type="text" id="numero" value="" pattern="[y4]+"  required="required" />
              </span></p></td>
          </tr>
      </table>
             <p>&nbsp;</p>
             <table width="59" border="0">
               <tr>
                 <th width="49" scope="col"><input name="Submit" type="submit" class="btn-warning" value="Enviar" /></th>
               </tr>
             </table>
             <p>&nbsp;</p>
             <p>&nbsp;</p>
            <p><a href="index2.php" class="Estilo3">Regresar al inicio</a></p></td>
         </tr>
       </table>
       
        <label>
        <br /><center> 
          <p>&nbsp;</p>
        
        </label>
        <div align="center"></div>
        </form>    </td>
  </tr>
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
