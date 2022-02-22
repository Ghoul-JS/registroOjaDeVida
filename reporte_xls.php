<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=clientes.xls');

	require 'conexion.php';
	$consulta = "SELECT * FROM basicos ORDER BY id ASC;";
	$resultado = $conectar->query($consulta);
?>

<table>
	<tr>
		<th> id </th>
		<th> cedula </th>
		<th> codigo </th>
		<th> nombre1 </th>
		<th> nombre2 </th>
		<th> apelledo1 </th>
		<th> apellido2 </th>
	</tr>

	<?php
		while ($flas = $resultado->fetch_assoc())
		{
			?>
			<tr>
				<td> <?php echo $flas['id'] ?> </td>
				<td> <?php echo $flas['cedula'] ?> </td>
				<td> <?php echo $flas['codigo'] ?> </td>
				<td> <?php echo $flas['nombre1'] ?> </td>
				<td> <?php echo $flas['nombre2'] ?> </td>
				<td> <?php echo $flas['apellido1'] ?> </td>
				<td> <?php echo $flas['apellido2'] ?> </td>
				
            </tr>
            <?php
		}
    ?>
</table>
     