<?php 
$alert = '';
session_start();
if (!empty($_SESSION['activo'])){
	header('	location: proyecto/');
}else{
if (!empty($_POST)) {
	if (empty($_POST['usuario']) || empty($_POST['clave'])) {
		$alert = 'Ingrese clave y contraseña';
	}else{
		require_once "conexion.php";
		$user = $_POST['usuario'];
		$pass = $_POST['clave'];
		$query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario= '$user' AND clave = '$pass'");
		
//2. Cerramos la conexión despues de hacer la consulta
		mysqli_close($conection);
		$result = mysqli_num_rows($query);
		if ($result > 0) {
			$data = mysqli_fetch_array($query);
			$_SESSION['activo'] = true;
			$_SESSION['idUser'] = $data['idusUario'];
			$_SESSION['nombre'] = $data['nombre'];
			$_SESSION['emal'] = $data['email'];
			$_SESSION['user'] = $data['usuario'];
			$_SESSION['rol'] = $data['rol'];
			header('location: proyecto/ingreso.php');	
	}else{
		$alert = 'El usuario o la clave no corresponden';
		session_destroy();
		}
		}

	}
}

?>

<!DOCTYPE html>
	<html>
	<head>
		<link rel="shortcut icon" href="">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit-no">
		<title>Ingeniería del Software III</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
	</head>
	<body>
<!--Creamos el codigo 1 -->
	<div id="login">
		<h3 class="text-center display-4">Ingresar Al Sistema</h3>
		<div class="container">
		<div id="login-row" class="row justify-content-center aling-items-center">
				<div id="login-column" class="col-md-6">
					<div id="login-box" class="col-md-12 bg-light text-dark">

			<form id="formLogin" class="form" action="" method="post">
			<h3 class="text-center text-dark">Iniciar Sesión</h3>
			<div class="form-grup">
			<div class="form-grup">
				<label for="usuario" class="text-dark">Usuario</label>
				<input type="text" name="usuario" id="usuario" class="form-control">
			</div>
			<div class="form-grup">
				<label for="password" class="text-dark">Contraseña</label>
				<input type="password" name="clave" id="password" class="form-control">
			</div>
			<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
			<div class="form-grup text-center">
				<input type="submit" name="submit" class="btn btn-dark btn-lg btn-block" id="btn-ingreso" value="Ingresar">
			</div>
			</div>
		</form>
					</div>
				</div>
			</div>
		</div>

	</div>

	
	<script  src="jquery/jquery-3.3.1.min.js"></script>
	<script  src="bootstrap/js/bootstrap.min.js"></script>
	<script  src="popper/popper.min.js"></script>
	<script  src="plugins/sweetalert2/sweetalert2.min.js"></script>
	<script  src="codigo.js"></script>
	</body>
	</html>