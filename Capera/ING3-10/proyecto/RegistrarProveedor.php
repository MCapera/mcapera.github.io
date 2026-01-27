<?php 
	include("conexion.php");
	$con = conectar();
	$proveedor    	= $_POST['proveedor'];
	$contacto    	= $_POST['contacto'];
	$direccion 		= $_POST['direccion'];
	$telefono  		= $_POST['telefono'];

	$sql = ("INSERT INTO proveedor(proveedor,contacto,direccion, telefono) VALUES('$proveedor', '$contacto', '$direccion', '$telefono')");
	$query = mysqli_query($con, $sql);

//retornamos sobre el formulario Usuario
	if($query){
		header("Location: Proveedor.php");
	}
?>