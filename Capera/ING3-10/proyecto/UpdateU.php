<?php 
	include("conexion.php");
	$con 		= conectar();
	$id 		= $_POST['idusuario'];
	$nombre 	= $_POST['nombre'];
	$correo 	= $_POST['correo'];
	$usuario	= $_POST['usuario'];
	$clave 		= $_POST['clave'];
	$rol 		= $_POST['rol'];
	$direccion 	= $_POST['direccion'];
	$telefono 	= $_POST['telefono'];

	$sql = "UPDATE usuario SET nombre = '$nombre', correo = '$correo', usuario = '$usuario', clave = '$clave', rol = '$rol', direccion = '$direccion', telefono = '$telefono' WHERE idusuario = '$id'";
	$query = mysqli_query($con, $sql);
	if($query){
		header("Location: Usuario.php");
	}
?>