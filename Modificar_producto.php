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
.Estilo8 {
	font-size: 18px;
	color: #FF8000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}

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
    <td align="center" >
	<?php
	  
	class producto
{     
	public function modificar ($codigo_producto)
	{
	
	   include('conexion.php');
	   $cont="0";

	                    $sql= "select * from producto where codigo_producto='$codigo_producto'";
	                                if(!$result=$db->query($sql))
	                                {
	                                    die('Datos no encontrados ����['.$db->error.']');
	                                }
		    while($row = $result -> fetch_assoc())
	        {
									      $codigo_producto=stripslashes($row["codigo_producto"]);
										 $_SESSION["codigo_producto"]=$codigo_producto;
									
										 
										  $nombreP=stripslashes($row["nombreP"]);
										  $_SESSION["nombreP"]=$nombreP;
										  
						                  $fk_tipo_producto=stripslashes($row["fk_tipo_producto"]);
										   $_SESSION["fk_tipo_producto"]=$fk_tipo_producto;
										   
						                  $fk_categoria =stripslashes($row["fk_categoria"]);
										   $_SESSION["fk_categoria"]=$fk_categoria;
										   
										  $fk_material=stripslashes($row["fk_material"]);
										   $_SESSION["fk_material"]=$fk_material;
										   
										  $fk_medida=stripslashes($row["fk_medida"]);
										   $_SESSION["fk_medida"]=$fk_medida;
										   
										  $fk_estado=stripslashes($row["fk_estado"]);	
										    $_SESSION["fk_estado"]=$fk_estado;
											
						                  $tamanio=stripslashes($row["tamanio"]);
										   $_SESSION["tamanio"]=$tamanio;
										   
										  $cantidad=stripslashes($row["cantidad"]);
										   $_SESSION["cantidad"]=$cantidad;
										   
										  $garantia=stripslashes($row["garantia"]);
										   $_SESSION["garantia"]=$garantia;
										   
										  $precio=stripslashes($row["precio"]);
										   $_SESSION["precio"]=$precio;
										   
										  $descripcion=stripslashes($row["descripcion"]);
										   $_SESSION["descripcion"]=$descripcion;
						         
										  
						
		                          $sql2= "select * from tipo_lampara where id_tipo_producto='$fk_tipo_producto'";
	                                if(!$result2=$db->query($sql2))
	                                {
	                                    die('Datos no encontrados ����['.$db->error.']');
	                                }
									   while($row2 = $result2 -> fetch_assoc())
	                                 {
										$tipo_producto=stripslashes($row2["tipo_producto"]);
										 $_SESSION["tipo_producto"]=$tipo_producto;
						             }
									 
                          

		                          $sql3= "select * from categoria where id_categoria='$fk_categoria'";
	                                if(!$result3=$db->query($sql3))
	                                {
	                                    die('Datos no encontrados ����['.$db->error.']');
	                                }
									   while($row3 = $result3 -> fetch_assoc())
	                                 {
									    $categoria=stripslashes($row3["categoria"]);
										 $_SESSION["categoria"]=$categoria;
						             }	
									 
									 
									 
									  $sql4= "select * from material where id_material='$fk_material'";
	                                if(!$result4=$db->query($sql4))
	                                {
	                                    die('Datos no encontrados ����['.$db->error.']');
	                                }
									   while($row4 = $result4 -> fetch_assoc())
	                                 {
									    $material=stripslashes($row4["material"]);
										 $_SESSION["material"]=$material;
						             }	
									 
									 
									 $sql5= "select * from medida where id_medida='$fk_medida'";
	                                if(!$result5=$db->query($sql5))
	                                {
	                                    die('Datos no encontrados ����['.$db->error.']');
	                                }
									   while($row5 = $result5 -> fetch_assoc())
	                                 {
									    $medida=stripslashes($row5["medida"]);
										 $_SESSION["medida"]=$medida;
						             }
									 
									 
									 $sql6= "select * from estado where id_estado='$fk_estado'";
	                                if(!$result6=$db->query($sql6))
	                                {
	                                    die('Datos no encontrados ����['.$db->error.']');
	                                }
									   while($row6 = $result6 -> fetch_assoc())
	                                 {
									    $estado=stripslashes($row6["estado"]);
										 $_SESSION["estado"]=$estado;
						             }							 						 			  
				 $cont=$cont+1;
		    }  	
									 
            if($cont=="0")
	          {
	             echo "No se encontraron datos!!";
	          }	 
	}	
}	

	    $nuevo=new producto();
		$nuevo-> modificar ($_POST["codigo_producto"]);						 								 							 								 
?>
	<table width="673" height="534" border="0" align="center">
	  <tr>
	    <td align="center" class=""><div align="center" >
	      <p>&nbsp;</p>
	      <p  class="h3 Estilo1 Estilo2 " >Modificar Producto </p>
	      </div>      
	    <form id="form1" name="form1" method="post" action="Negocio_Formulario_Modificar.php" >
        <table width="389" height="483" border="0" align="center"  >
          <tr>
            <td height="37" colspan="2">&nbsp;</td>
            </tr>
          <tr>
            <td height="32" colspan="2" class="h3"><input name="codigo_producto"  id="codigo_producto" type="hidden" value="<?php echo $_SESSION["codigo_producto"]; ?>"/></td>
              </tr>
          <tr>
            <td width="193" class="h3"><span class="Estilo3">Nombre</span></td>
              <td width="186" ><label>
                
                      <div align="justify"><span class="btn-lg">
                    <input name="nombreP" type="text" id="nombreP" value="<?php echo $_SESSION["nombreP"];?>" />
					</span>
                  </div>
              </label></td>        
            </tr>
          <tr>
            <td class="h3"><span class="Estilo3">Tipo producto </span></td>
              <td class="btn-lg"><label>
                <select name="fk_tipo_producto" id="fk_tipo_producto" value="">
                  <option value="<?php echo   $_SESSION["fk_tipo_producto"];?>"><?php echo  $_SESSION["tipo_producto"];?></option>
                  <option value="1">Lampara de techo</option>
                  <option value="2">Lampara colgante</option>
                  <option value="3">Lampara de sobremesa</option>
                  <option value="4">Lampara de pared</option>
                  <option value="5">Lampara de pie</option>
                  </select>
                </label></td>
            </tr>
          <tr>
            <td height="34" class="h3"><span class="Estilo3">Categoria</span></td>
              <td class="btn-lg"><label>
                <select name="fk_categoria" id="fk_categoria" >
                  <option value="<?php echo $_SESSION["fk_categoria"]?>"><?php echo $_SESSION["categoria"];?></option>
                  <option value="1">Lampara</option>
                  <option value="2">Repuesto</option>
                  <option value="3">Linea de Acero</option>
                  <option value="4">Linea El&eacute;ctrica</option>
                  </select>
                </label></td>
            </tr>
          <tr>
            <td height="34" class="h3"><span class="Estilo3">Material</span></td>
              <td class="btn-lg"><label>
                <select name="fk_material" id="fk_material" value="">
                  <option value="<?php echo $_SESSION["fk_material"]?>"><?php echo $_SESSION["material"];?></option>
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
            <td height="26" class="h3"><span class="Estilo3">
              <label><strong>Medida</strong></label>
            </span></td>
            <td height="26" class="btn-lg"><select name="fk_medida" id="fk_medida"  value="">
                <option value="<?php echo $_SESSION["fk_medida"]?>"><?php echo $_SESSION["medida"];?></option>
                <option value="1">Cm</option>
                <option value="2">M</option>
                </select></td>
            </tr>
          <tr>
            <td height="32" class="h3"><span class="Estilo3"><strong>Tama&ntilde;o</strong></span></td>
              <td class="btn-lg"><label>
                <input name="tamanio" type="text" id="tamanio" value="<?php echo $_SESSION["tamanio"];?>" />
                </label></td>
            </tr>
          <tr>
            <td height="32" class="h3"><span class="Estilo3"><strong>Cantidad</strong></span></td>
              <td class="btn-lg"><input name="cantidad" type="text" id="cantidad" value="<?php echo $_SESSION["cantidad"];?>" /></td>
            </tr>
          <tr>
            <td height="32" class="h3"><span class="Estilo3"><strong>Garantia</strong></span></td>
              <td class="btn-lg"><input name="garantia" type="text" id="garantia" value="<?php echo $_SESSION["garantia"];?>" /></td>
            </tr>
          <tr>
            <td height="32" class="h3"><span class="Estilo3"><strong>Precio</strong></span></td>
              <td class="btn-lg"><input name="precio" type="text" id="precio" value="<?php echo $_SESSION["precio"];?>" /></td>
            </tr>
          <tr>
            <td height="32" class="h3"><span class="Estilo3"><strong>Estado</strong></span></td>
              <td class="btn-lg"><p>
                <select name="fk_estado" id="fk_estado"  value="">
                  <option value="<?php echo $_SESSION["fk_estado"]?>"><?php echo $_SESSION["estado"];?></option>
                  <option value="1">Disponible</option>
                  <option value="2">No Disponible</option>
                  </select>
              </p>
                </td>
            </tr>
          <tr>
            <td height="32" class="h3"><span class="Estilo3"><strong>Descripcion</strong></span></td>
              <td class="btn-lg"><input name="descripcion" type="text" id="descripcion" value="<?php echo $_SESSION["descripcion"];?>" /></td>
            </tr>
          <tr>
            <td height="32" class="h3"><span class="Estilo3"><strong>Digite el texto y4 </strong></span></td>
              <td>                  
                  <div align="justify"><span class="btn-lg">
                    <input name="numero" type="text" id="numero" value="" pattern="[y4]+"  required />
                    </span>
                  </div></td>
            </tr>
          </table>
            <center> 
                <p>&nbsp;</p>
                <table width="58" border="0">
                  <tr>
                    <th width="48" scope="col"><input name="Submit" type="submit" class="btn-warning estilo14" value="Enviar" /></th>
                  </tr>
                </table>
                <p>&nbsp;</p>
                <p>
                  </label>
        </p>
              <div align="center"></div>
            <p align="center" class="Estilo3"><a href="index2.php" class="Estilo4">Regresar al inicio</a> </p>
            <p align="center" class="Estilo3">&nbsp;</p>
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
