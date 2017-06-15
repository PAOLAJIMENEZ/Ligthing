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
<table width="100%" height="1047" align="center" >
  <tr>
    <td width="1280" height="236">
	<?php
	include('Banner.php');
	?>	</td>
  </tr>
  <tr>
    <td width="1280" height="43">
	<?php
	include('MenuOriginal2.php');
	?>	</td>
  </tr>
  <tr>
 <td height="547"><form id="form1" name="form1" method="post" action="neg_consultar_producto_material.php">
   <table summary="" width="823" border="0" align="center">
     <tr>
       <td width="318" rowspan="2"><img src="img_material.png" width="315" height="243" /></td>
       <td width="265" height="246"><p>&nbsp;</p>
         <p>Seleccione el material: </p>         </td>
       <td width="169" rowspan="2" align="right"><label>
         <select name="material" id="material">
           <option value="Seleccione" selected="selected">Seleccione</option>
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
       <td><div align="center">
         <input name="Submit" type="submit" class="btn-success" value="Consultar" />
       </div></td>
     </tr>
   </table>
  </form> </td>
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
