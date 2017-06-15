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
	include('MenuOriginal2.php');
	?>
	</td>
  </tr>
  <tr>
    <td width="1280" height="541">
	  <div align="center">
	    <?php
 
 class Producto{
 
 public function consultarProducto($codigo)
 {
 	include ('conexion.php');
		
	
	$sql="SELECT * FROM producto WHERE codigo_producto='$codigo'";
			if (!$result = $db->query($sql))
			{
		     	die ('Datos no Encontrados!!! ['.$db->error.']');
			}
		echo"<table width=900 border=1 class=table-hover aling=center>";
  		echo"<tr>";
		echo"<td>Codigo</td>";
    	echo"<td >Nombre Producto</td>";
    	echo"<td >Garantia</td>";   		
		echo"<td>Cantidad</td>";
		echo"<td >Tamaño</td>";	
		echo"<td >Precio</td>";	
		echo"<td >Descripcion</td>";				
		
  		echo"</tr>";
		
			while ($row = $result->fetch_assoc())
			{
				
				$nnombreP= stripslashes($row["nombreP"]);
				$ggarantia= stripslashes($row["garantia"]);
				$ccantidad= stripslashes($row["cantidad"]);
				$ttamanio= stripslashes($row["tamanio"]);
				$ffk_medida= stripslashes($row["fk_medida"]);
				$material= stripslashes($row["fk_material"]);
				$pprecio= stripslashes($row["precio"]);
				$ddescripcion= stripslashes($row["descripcion"]);
				
				
					//subconsulta
					
			$sql3="SELECT * FROM material WHERE id_material='$material'";
			if (!$result3 = $db->query($sql3))
			{
		     	die ('Datos no Encontrados!!! ['.$db->error.']');
			}
			while ($row3 = $result3->fetch_assoc())
			{
				$mmaterial= stripslashes($row3["material"]);
			}	
	
				
				
		
	$sql2="SELECT * FROM medida WHERE id_medida='$ffk_medida'";
			if (!$result2 = $db->query($sql2))
			{
		     	die ('Datos no Encontrados!!! ['.$db->error.']');
			}
			while ($row2 = $result2->fetch_assoc())
			{
				$mmedida= stripslashes($row2["medida"]);
			}	
	
				
				$medidata=$ttamanio."-".$mmedida;
				
				
	
				
				
				
		echo"<tr>";
		echo"<td>$codigo</td>";
    	echo"<td>$nnombreP</td>";
    	echo"<td>$ggarantia</td>";
    	echo"<td>$ccantidad</td>";
		echo"<td>$medidata</td>";	
	    echo"<td>$pprecio</td>";
		echo"<td>$ddescripcion</td>";
  		echo"</tr>"; 
				
			}//fin while
		
			echo"</table>";
				
  		
 
 	}//fin met
 }//fin class
 $nuevo= new Producto();
 $nuevo-> consultarProducto($_POST['codigo']); 
 ?>
      </div></td>
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
