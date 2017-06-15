<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.Estilo3 {
	font-size: 16px;
	font-weight: bold;
}
.Estilo4 {color: #000000}

-->
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
	<p>&nbsp;</p>
	<table width="673" height="773" border="3" bordercolor="#000000" align="center">
  <tr >
    <td align="center" ><table width="673" height="534" border="0" align="center">
	  <tr>
	    <td align="center" class=""><div align="center" >
	      <p  class="h3 Estilo1 Estilo2 " >Modificar Imagen </p>
	      </div>      
	    <form action="Negocio_Formulario_Modificar.php" method="post" enctype="multipart/form-data" name="form1" id="form1" >
	      <center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p></p>
<p>
  <?php
	  
	class producto
{     
	public function modificarImagen($imagen,$numero)
	{
	
	   include('conexion.php');
	   $cont="0";

 $sql= "select * from producto where imagen='$imagen'";
	 if(!$result=$db->query($sql))
	 {
	    die('Datos no encontrados ����['.$db->error.']');
	  }
									
		echo "<table width=400  border=1>";
        echo "<tr bgcolor=##AAFFAA >";
        echo "<td> Imagen</td>";
        echo "<td> Modificar </td>";

       echo "</tr>";
	   
		    while($row = $result -> fetch_assoc())
	        {
				  $imagen=stripslashes($row["imagen"]); 
				  $_SESSION["imagen"]=$imagen;
								
				echo "<tr>";


echo "<td><img src=Imagenes_todo/$imagen width=32 height=32 /></td>";
echo "<td>";
echo "<form id=form1 name=form1 method=post autocomplete=OFF action=Negocio_ModificarImagen.php>";
echo "<input type=text id=numero name=numero size=3> ";
echo "<input type=text name=imagen value=$imagen> ";
echo "<input type=submit name=Submit value=Modificar />";
echo "</form>";
echo "</td>";

echo "</tr>";		
		                          	  
				 $cont=$cont+1;
		    }  	
									 
            if($cont=="0")
	          {
	             echo "No se encontraron imagenes!!";
	          }	 
	}	
}	

	    $nuevo=new producto();
		$nuevo-> modificarImagen ($_POST["imagen"],$_POST["numero"]);						 								 							 								 
?>

	    </form></td>
    </tr>
    </table></td>
  </tr>
</table>
    <p>&nbsp;</p>
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
