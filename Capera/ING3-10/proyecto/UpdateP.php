<?php 
	include("conexion.php");
	$con 		= conectar();
	$cod 		= $_POST['codproveedor'];
	$proveedor 	= $_POST['proveedor'];
	$contacto 	= $_POST['contacto'];
	$direccion 	= $_POST['direccion'];
	$telefono 	= $_POST['telefono'];

	$sql = "UPDATE proveedor SET proveedor = '$proveedor', contacto = '$contacto', direccion = '$direccion', telefono = '$telefono' WHERE codproveedor = '$cod'";
	$query = mysqli_query($con, $sql);
	if($query){
		header("Location: Proveedor.php");
	}
?>