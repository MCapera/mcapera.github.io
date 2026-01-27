<?php 
	include("conexion.php");
	$con 	= conectar();
	$cod 	= $_GET['cod'];
	$sql 	= "DELETE  FROM proveedor WHERE codproveedor = '$cod'";
	$query 	= mysqli_query($con, $sql);
	if($query){
		header("Location: Proveedor.php");
	}
?>