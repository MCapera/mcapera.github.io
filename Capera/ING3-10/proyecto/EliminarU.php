<?php 
	include("conexion.php");
	$con 	= conectar();
	$id 	= $_GET['id'];
	$sql 	= "DELETE  FROM usuario WHERE idusuario = '$id'";
	$query 	= mysqli_query($con, $sql);
	if($query){
		header("Location: Usuario.php");
	}
?>