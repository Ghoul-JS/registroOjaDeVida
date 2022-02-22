<?php

	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=agenda.xls');
	include("conexion.php");
	$consulta = "SELECT * FROM basicos ORDER BY id ASC;";
	$resultado = $conectar->query($consulta);
?>

<table>
	<tr>
		<th>  Cedula  </th>
		<th>  Codigo  </th>
		<th>  Nombre1  </th>
		<th>  Nombre2 </th>
		<th>  Apellido1 </th>
		<th>  Apellido2  </th>
	</tr>
	
	<?php
	 	while ( $row = $resultado->fetch_assoc() )
    	{
    		?>
    		<tr>
    			<td> <? echo $row['cedula'] ?> </td>
    			<td> <? echo $row['codigo'] ?> </td>
    			<td> <? echo $row['nombre1'] ?> </td>
    			<td> <? echo $row['nombre2'] ?> </td>
    			<td> <? echo $row['apellido1'] ?> </td>
    			<td> <? echo $row['apellido2'] ?> </td>
    		</tr>
    		<?php
    	}
    	?>
  </table>
  