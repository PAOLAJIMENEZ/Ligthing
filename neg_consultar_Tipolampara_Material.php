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
   
   public function consultarProductoyMaterial($tipo_producto,$material){
   
   include ('conexion.php');

    
	
	
	$sql="SELECT * FROM producto WHERE fk_tipo_producto= '$tipo_producto' AND fk_material= '$material'";
			if (!$result = $db->query($sql))
			{
		     	die ('Datos no Encontrados!!! ['.$db->error.']');
			}
			
		echo"<table width=650 border=1>";
  		echo"<tr>";
		echo"<td >Codigo producto</td>";
    	echo"<td>Nombre Producto</td>";	
		echo"<td >Tipo producto</td>";
    	echo"<td >Material</td>";			

  		echo"</tr>";
		
			while ($row = $result->fetch_assoc())
			{
				$codigo= stripslashes($row["codigo_producto"]);
				$nombre= stripslashes($row["nombreP"]);
				$fk_tipo_producto= stripslashes($row["fk_tipo_producto"]);
				$fk_material= stripslashes($row["fk_material"]);			
		
				
				
			
			
			//subconsulta
				$sql3="SELECT * FROM tipo_lampara WHERE id_tipo_producto= '$fk_tipo_producto'";
				if (!$result3 = $db->query($sql3))
				{
		     		die ('Datos no Encontrados!!! ['.$db->error.']');
				}
				while ($row3 = $result3->fetch_assoc())
				{
					$ttipo_producto = stripslashes($row3["tipo_producto"]);	
					$id_tipo_producto = stripslashes($row3["id_tipo_producto"]);	
					
									
				}
				
				$sql4="SELECT * FROM material WHERE id_material= '$fk_material'";
				if (!$result4 = $db->query($sql4))
				{
		     		die ('Datos no Encontrados!!! ['.$db->error.']');
				}
				while ($row4 = $result4->fetch_assoc())
				{
					$mmaterial= stripslashes($row4["material"]);	
					
					
				}
				
			echo"<tr>";
			echo"<td >$codigo</td>";		
			echo"<td>$nombre</td>";
			echo"<td >$ttipo_producto</td>";		
			echo"<td>$mmaterial</td>";				
			
			echo"</tr>";
			
			
			
			
			}//fin de while 
  
   
   echo"</table>";
   
   
   }//fin método
   
 }//fin clase
 
 $nuevo=new Producto();
 $nuevo -> consultarProductoyMaterial($_POST["tipo_producto"],$_POST["material"]);
   
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
