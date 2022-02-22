<?php
	include("conexion.php");
	$consulta = "SELECT * FROM basicos ORDER BY id ASC;";
	$resultado = $conectar->query($consulta);

?>

<html lang="es">
	<head>
		<title> Reporte Agenda </title>
		<meta> <name = "viewport" content="width, initiall-scale=1, maximun-scale=1"/>
		<link href="css/stilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
	<body>
		<header>
			<div class="alert-info">
			<h3> Descargar en PDF V.1.0.0 </h3> 
		</header>
		<SECTION>
			<table class="table">
				<tr class="bg-primary">
					<th> Cedula </th>
					<th> Codigo </th>
					<th> Nomnre1 </th>
					<th> Nombre2 </th>
					<th> Apellido1 </th>
					<th> Apellido2 </th>
				</tr>
                <?php
                	while ( $row = $resultado->fetch_assoc() )
    				{
    					echo '<tr> 
    							<td>'.$row['cedula'].'</td>
								<td>'.$row['codigo'].'</td>
								<td>'.$row['nombre1'].'</td>
								<td>'.$row['nombre2'].'</td>
								<td>'.$row['apellido1'].'</td>
								<td>'.$row['apellido2'].'</td>
							</tr>';	
					}
				?>
			</table>
		</SECTION>
		<form method="post" action="pdf_usco.php" class="form">
		<input type="submit" name="Genera Reporte Excel">
		</form>
	</body>
</html>