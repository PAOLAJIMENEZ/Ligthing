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
	<table width="554" border="0" align="center">
   <tr>
     <td width="295"><img src="img_clientes.jpg" width="317" height="301" /></td>
     <td width="243"><?php
 
 class Producto{
 
 public function consultarProductos()
 {
 	include ('conexion.php');
		
	
	$sql="SELECT * FROM producto JOIN categoria ON producto.fk_categoria = categoria.id_categoria";
			if (!$result = $db->query($sql))
			{
		     	die ('Datos no Encontrados!!! ['.$db->error.']');
			}		
			
		echo"<table width=900 border=1 class=table-hover aling=center>";
  		echo"<tr>";
    	echo"<td >Codigo</td>";
    	echo"<td >Nombre Producto</td>";   		
		echo"<td>Categoria</td>";
		echo"<td >Tipo Producto</td>";				
		echo"<td >Cantidad</td>";		
	    echo"<td >Garantia (años)</td>";
		echo"<td >Tamaño</td>";	
		echo"<td >Material</td>";	
		echo"<td >Precio</td>";	
		echo"<td >Descripcion </td>";
		echo"<td > Estado</td>";																								
  		echo"</tr>";
		
			while ($row = $result->fetch_assoc())
			{
		    	$ccodigo= stripslashes($row["codigo_producto"]);
				$nnombreP= stripslashes($row["nombreP"]);
				$ffk_categoria= stripslashes($row["categoria"]);
				$ttipo_Producto= stripslashes($row["fk_tipo_producto"]);
				$ccantidad= stripslashes($row["cantidad"]);
				$ggarantia= stripslashes($row["garantia"]);
				$ttamanio= stripslashes($row["tamanio"]);
				$ffk_material= stripslashes($row["fk_material"]);
				$ffk_medida= stripslashes($row["fk_medida"]);
				$pprecio= stripslashes($row["precio"]);		
				$ddescripcion= stripslashes($row["descripcion"]);
				$ffk_estado= stripslashes($row["fk_estado"]);							
				
					
		
								
			$sql2="SELECT * FROM tipo_lampara WHERE id_tipo_producto='$ttipo_Producto'";
			if (!$result2 = $db->query($sql2))
			{
		     	die ('Datos no Encontrados!!! ['.$db->error.']');
			}			
		
			while ($row2 = $result2->fetch_assoc())
			{
		    	$ttipo_Producto = stripslashes($row2["tipo_producto"]);
			}

			$sql3="SELECT * FROM material WHERE id_material='$ffk_material' ";
			if (!$result3 = $db->query($sql3))
			{
		     	die ('Datos no Encontrados!!! ['.$db->error.']');
			}		
		
			while ($row3 = $result3->fetch_assoc())
			{
		    	$mmaterial= stripslashes($row3["material"]);
			}
			
			$sql4="SELECT * FROM medida WHERE id_medida='$ffk_medida'";
			if (!$result4 = $db->query($sql4))
			{
		     	die ('Datos no Encontrados!!! ['.$db->error.']');
			}		
		
			while ($row4 = $result4->fetch_assoc())
			{
		    	$mmedida= stripslashes($row4["medida"]);
		    }	
		
			
			$sql5="SELECT * FROM estado WHERE id_estado= '$ffk_estado'";
			if (!$result5 = $db->query($sql5))
			{
		     	die ('Datos no Encontrados!!! ['.$db->error.']');
			}		
		
			while ($row5 = $result5->fetch_assoc())
			{
		    	$eestado= stripslashes($row5["estado"]);
			}
				$medidata=$ttamanio."-".$mmedida;	
				
		
				
		echo"<tr>";
    	echo"<td>$ccodigo</td>";
    	echo"<td>$nnombreP</td>";
    	echo"<td>$ffk_categoria</td>";
		echo"<td>$ttipo_Producto</td>";		
		echo"<td>$ccantidad</td>";	
		echo"<td>$ggarantia</td>";
		echo"<td>$medidata</td>";
		echo"<td>$mmaterial</td>";
		echo"<td>$$pprecio</td>";
		echo"<td>$ddescripcion</td>";
		echo"<td>$eestado</td>";
  		echo"</tr>"; 
				
			}//fin while
		
			echo"</table>";
				
  		
 
 	}//fin met
 }//fin class
 
 $nuevo= new Producto();
 $nuevo-> consultarProductos(); 
 ?></td>
   </tr>
 </table>
 	</td>
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
