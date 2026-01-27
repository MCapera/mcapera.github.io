<?php 
//Incluimos el codigo php para retornar y conectar
include("conexion.php");
	$con 	= conectar();
	$cod    = $_GET['cod'];
	$sql 	= "SELECT * FROM proveedor WHERE codproveedor='$cod'";
	$query	= mysqli_query($con, $sql);
	$row 	=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>CIES 2022</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a style="margin-left: 10px; border: none" class="btn btn-outline-light" href="ingreso.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a style="margin-left: 10px; border: none" class="btn btn-outline-light" href="usuario.php" >Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a style="margin-left: 10px; border: none" class="btn btn-outline-light" href="#" >Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a style="margin-left: 10px; border: none" class="btn btn-outline-light" href="#" >Registrar Venta</a>
                    </li>
                    <li class="nav-item">
                        <a style="margin-left: 10px; border: none" class="btn btn-outline-light" href="#" >Empleado</a>
                    </li>                    
                </ul>
                
            </div>
            <div class="dropdown ">
                    <button style="border: none" class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Administrador
                    </button>
                    <div class="dropdown-menu text-center">
                        <a class="dropdown-item" href="#">
                            <img src="img/usuario.png" alt="60" width="60">
                        </a>
                        <a class="dropdown-item" href="#">Usuario</a>
                        <a class="dropdown-item" href="#">usuario@cies.edu.co</a>
                        <div class="dropdown-divider"></div>
                        <form action="Validar" method="POST">
                            <button name="accion" value="Salir" class="dropdown-item" href="#">Salir</button>
                        </form>
                    </div>
                </div>

        </nav>
        
            <h3>USUARIO</h3>
            <div class="container">
            <div class="row">
                <div class="col-md-4">
                <form action="UpdateP.php" method="POST">
                    <hr>
            <div class="alert"><?php echo isset($alert) ? $alert: ''; ?></div>
            		<input type="hidden" name="codproveedor" value="<?php echo $row['codproveedor'];?>">
                    <input type="text" class="form-control mb-3" name="proveedor" value="<?php echo $row['proveedor']; ?>" required>
                    <input type="text" class="form-control mb-3" name="contacto" value="<?php echo $row['contacto']; ?>" required>
                    <input type="text" class="form-control mb-3" name="direccion" value="<?php echo $row['direccion']; ?>" required>
                    <input type="text" class="form-control mb-3" name="telefono" value="<?php echo $row['telefono']; ?>" required>
                    <input type="submit" name="btn-ingreso " class="btn btn-primary btn-block" value="Modificar">
                </form>    
            </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>