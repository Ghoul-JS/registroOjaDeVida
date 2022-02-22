<?php
	$servidor = "localhost";
	$usuario = "root";
	$password = "";
	$basedato = "agenda_usco";
	// //create conection
	$conectar = mysqli_connect($servidor, $usuario, $password, $basedato);

	// // Check connection
	// if ($conectar->connect_error) {
	//     die("Connection failed: " . $conectar->connect_error);
	// }

	// Create connection
	$conectar = mysqli_connect('localhost', 'root','');
	//  @mysql_connect('localhost', 'root','');

	// Check connection
	if ($conectar->connect_error) {
	    die("Connection failed: " . $conectar->connect_error);
	}

	$codigo=$_POST['codigo'];
	$cedula=$_POST['cedula'];
	$nombre1=$_POST['nombre1'];
	$nombre2=$_POST['nombre2'];
	$apellido1=$_POST['apellido1'];
	$apellido2=$_POST['apellido2'];
	$ciudad=$_POST['ciudad'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	$correo=$_POST['correo'];

	$sql="INSERT INTO agenda_usco VALUES('$codigo','$cedula','$nombre1','$nombre2','$apellido1','$apellido2','$ciudad','$telefono''$direccion','$correo')";

	// $ejecutar=mysqli_connect($sql);
	if(!$conectar ){
		echo"hubo un error";
	}else{
		echo"datos guardados correctamente <br><a href='agenda.html'>Volver</a>";
	}
?>