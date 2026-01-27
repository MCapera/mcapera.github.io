<?php 
	include("conexion.php");
	$con = conectar();
	$nombre    = $_POST['nombre'];
	$correo    = $_POST['correo'];
	$usuario   = $_POST['usuario'];
	$clave     = $_POST['clave'];
	$rol       = $_POST['rol'];
	$direccion = $_POST['direccion'];
	$telefono  = $_POST['telefono'];

	$sql 	= ("INSERT INTO usuario(nombre,correo,usuario,clave,rol, direccion, telefono) VALUES('$nombre','$correo','$usuario','$clave','$rol', '$direccion', '$telefono')");
	$query 	= mysqli_query($con, $sql);

//retornamos sobre el formulario Usuario
	if($query){
		header("Location: Usuario.php");
	}
?>