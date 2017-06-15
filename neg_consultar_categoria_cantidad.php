<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lighting</title>
<style type="text/css">
body{
background: linear-gradient(to right, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 0%, rgba(120,122,124,1) 100%);
}

.tabla{
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:12px;
text-align:right;
width:600px;
}

.tabla
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
   
   public function consultarCategoriayCantidad($categoria){
   
   include ('conexion.php');

	$sql="SELECT * FROM producto WHERE fk_categoria= '$categoria'";
			if (!$result = $db->query($sql))
			{
		     	die ('Datos no Encontrados!!! ['.$db->error.']');
			}
			
		echo"<table width=650 border=1>";
  		echo"<tr>";
		echo"<th>Codigo producto</th>";
    	echo"<th>Nombre Producto</th>";	
		echo"<th >Categoria</th>";
    	echo"<th >Cantidad</th>";			

  		echo"</tr>";
		
			while ($row = $result->fetch_assoc())
			{
				$codigo= stripslashes($row["codigo_producto"]);
				$nombre= stripslashes($row["nombreP"]);
				$fk_categoria= stripslashes($row["fk_categoria"]);
				$cantidad= stripslashes($row["cantidad"]);			
		
		
			//subconsulta
				$sql3="SELECT * FROM categoria WHERE id_categoria= '$fk_categoria'";
				if (!$result3 = $db->query($sql3))
				{
		     		die ('Datos no Encontrados!!! ['.$db->error.']');
				}
				while ($row3 = $result3->fetch_assoc())
				{
					$ccategoria = stripslashes($row3["categoria"]);	
					$id_categoria = stripslashes($row3["id_categoria"]);	
					
									
				}
				
				
			echo"<tr>";
			echo"<td >$codigo</td>";		
			echo"<td>$nombre</td>";
			echo"<td >$ccategoria</td>";		
			echo"<td>$cantidad</td>";				
			
			echo"</tr>";
			
	
			}//fin de while 
  
   
   echo"</table>";
   
   
   }//fin método
   
 }//fin clase
 
 
 $nuevo=new Producto();
 $nuevo -> consultarCategoriayCantidad($_POST["categoria"]);
   
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
