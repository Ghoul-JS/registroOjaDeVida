<?php
	include 'conexion.php';
	$consulta = "SELECT * FROM basicos ORDER BY id ASC;";
	$resultado = $conectar->query($consulta);


?>

<html lang="es">
	<head>
		<title> Generar Reporte a EXCEL desde BD </title>
		<meta> name="viewport" content="width, initail-scale=1, maximun-scale=1"/>
		<link href="css/stilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h2> Descargar Reporte en Excel v.001 </h2>
		</header>
		<setion>
			<table class="table">
				<tr class="bg-primary">
					<th>id</th>
					<th>Cedula</th>
					<th>Codigo</th>
					<th>Nombre1</th>
					<th>Nombre2</th>
					<th>Apellido1</th>
					<th>Apellido21</th>
				</tr>
				<?php
					while ($registros = $resultado->fetch_assoc())
					{
						echo '<tr>
								<td>'.$registros['id'].'</td>
								<td>'.$registros['cedula'].'</td>
								<td>'.$registros['codigo'].'</td>
								<td>'.$registros['nombre1'].'</td>
								<td>'.$registros['nombre2'].'</td>
								<td>'.$registros['apellido1'].'</td>
								<td>'.$registros['apellido2'].'</td>
							</tr>';
					}
				?>
			</table>
		</setion>
		<form methood="post" action="reporte_xls.php" class="form">
		<input type="submit" name="Generar Reporte excel">
		</form>

	</body>
</html>		
