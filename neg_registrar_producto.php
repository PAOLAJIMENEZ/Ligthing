<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
body{
background: linear-gradient(to right, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 0%, rgba(120,122,124,1) 100%);
}
</style>
</head>

<body>
<table width="100%" height="948" align="center" bgcolor="#848484">
  <tr>
    <td width="1280" height="222">
	<?php
	include('Banner.php');
	?>	</td>
  </tr>
  <tr>
    <td width="1280" height="62">
	<?php
	include('MenuOriginal2.php');
	?>	</td>
  </tr>
  <tr>
    <td width="1280" height="454">
	<p>&nbsp;</p>
	<table width="673" height="534" border="1" align="center" bordercolor="#FFFFFF" >
  
  <tr>
    <td>
	

<table width="673" height="295" align="center">
  <tr>
    <td height="98" class="h1 Estilo1"><div align="center">Formulario Personal </div></td>
  </tr>
  <tr>
    <td>
	<center>
	 <?php
		 
		 
class producto
{
           
	public function registrar($codigo_producto,$nombreP,$fk_tipo_producto,$fk_categoria,$fk_material,$fk_medida,$tamanio,$cantidad,$garantia,$precio,$fk_estado,$descripcion,$numero)
	{
	
	$directorio=$_SERVER[ 'DOCUMENT_ROOT'].'/Proyecto/Imagenes_todo/';
	$nombret= $_FILES['imagen']['name'];
	$num=date("GHs");
	$nombre=$num.$nombret;
	$tipo = $_FILES['imagen'] ['type'];
	$tamano =$_FILES ['imagen'] ['size'];
	move_uploaded_file($_FILES['imagen'] ['tmp_name'],$directorio.$nombre);
	
	
	include ('conexion.php');
		 $cont="0";
		 // capa datos
		 if ($numero=="y4")
		 {
		 
		  
		  
		   $sql= "select * from producto where codigo_producto='$codigo_producto'";
	                                if(!$result=$db->query($sql))
	                                {
	                                    die('Datos no encontrados ����['.$db->error.']');
	                                }
		   while($row = $result -> fetch_assoc())
	           {
		  
		  
		                 echo "Este codigo de producto ya exite!!";
		  
		                 $cont=$cont+1;
		       }  	
									 
            if($cont=="0")
	          {
			  
			   mysqli_query($db,"insert into producto(id_producto,codigo_producto,nombreP,fk_categoria ,fk_tipo_producto,cantidad ,garantia,tamanio,fk_material,fk_medida,precio,descripcion,imagen,fk_estado)
		           Values
		        (null,'$codigo_producto','$nombreP','$fk_categoria','$fk_tipo_producto','$cantidad','$garantia','$tamanio','$fk_material','$fk_medida','$precio','$descripcion','$nombre','$fk_estado')")
		        or die (mysqli_error($db));
		   
		   
		        echo "EL PRODUCTO A SIDO REGISTRADO EXITOSAMENTE </b>";	 
	          }	
  		   
		 }
		 if ($numero!="y4")
		 {
		   echo "Error en los datos introducidos </br>";
		 }
	} 
}
		 
		 $nuevo=new producto();
		 $nuevo-> registrar($_POST["codigo_producto"],$_POST["nombreP"], $_POST["fk_tipo_producto"],$_POST["fk_categoria"],$_POST["fk_material"],$_POST["fk_medida"],$_POST["tamanio"],$_POST["cantidad"],$_POST["garantia"],$_POST["precio"],$_POST["fk_estado"],$_POST["descripcion"],$_POST["numero"]);		 
		 
		 ?>

	 <form id="form1" name="form1" method="post" action="">
       <label><a href="index2.php">Regresar al inicio </a></label>
	 </form>
	 </center>    </td>
  </tr>
</table>    </td>
  </tr>
</table>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="1280" height="197">
	<?php
	include ('Footer.php');
	?>
	
	</td>
  </tr>
</table>
</body>
</html>
