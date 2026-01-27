<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$bd = 'facturacion1';

$conection = @mysqli_connect($host,$user,$pass,$bd);
//1. -----Prueba 1 cerramos la conexión
// mysqli_close($conection);

if (!$conection) {
	echo "Error en la conexión";
}else{
	//echo "Conexión exitosa";
}

?>