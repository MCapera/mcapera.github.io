<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Ingeniería del Software III</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a style="margin-left: 10px; border: none" class="btn btn-outline-light" href="#">Home</a>
                    </li>
                   <li class="nav-item">
                        <a style="margin-left: 10px; border: none" class="btn btn-outline-light" href="usuario.php" >Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a style="margin-left: 10px; border: none" class="btn btn-outline-light" href="Proveedor.php" >Proveedor</a>
                    </li>
                    <li class="nav-item">
                        <a style="margin-left: 10px; border: none" class="btn btn-outline-light" href="Producto.php" >Producto</a>
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
                        <a class="dropdown-item" href="#">Administrador</a>
                        <a class="dropdown-item" href="#">Admin@cies.edu.co</a>
                        <div class="dropdown-divider"></div>
                        <form action="Validar" method="POST">
                            <button name="accion" value="Salir" class="dropdown-item" href="#">Salir</button>
                        </form>
                    </div>
                </div>

        </nav>
<!--Creamos el codigo del formulario plantilla -->

        <h3>INGRESO SISTEMA</h3>
        
        <main>
        <section id="bienvenidos">
            <h2>BIENVENIDOS A MCE</h2>
        </section>
        <section id="info">
            <h3>MCE BLOCK.</h3>
        </section>  
        <section id="blog">
                <h3>QUERES SABER MÁS SOBRE NOSOTROS</h3>
                <div class="contenedor">
                    <form method="get" action="Galeno.html">
                    <article class="caja" height="350">
                        <h4>PRESENTACIÓN</h4>
                        <img src="img/1primera.jfif" class="efecto">
                        <div class="contenido"></div>
                        <p>Esta página fue creada para poder y satisfacer las compras en linea de una forma seguna he de inmediato. tenemos buenos precios y promociones que les pueda interesar, también envios nacionales con 48 horas de tiempo para que su pedido llegué a su destino, Además puedes no solo pedir cosas de una sola empresa, también de muchas más...</p>
                        <center>
                        <input type="submit" value="LEER MÁS" class="boton">
                        </center>
                    </article>
                    </form>
                    <article class="caja" height="350">
                        <h4>MISIÓN</h4>
                        <img  src="img/2segunda.jpg" class="efecto">
                        <div class="contenido">
                        <p>Ser una o la mejor de las paginas de compras en linea en colombia con envios en menos de 48 horas, precios y promociones que a cualquier persona le podría interesar. Además también poder extender nuestros servicios para otros paises de america del sur para no ser la mejor, no solo en colombia si no que también en otros paises...</p>
                        <center>
                        <input type="submit" value="LEER MÁS" class="boton">
                        </center>
                    </div>
                </article>
                    <article class="caja" height="350">
                        <h4>VISIÓN</h4>
                        <img src="img/3tercera.jpg" class="efecto">
                        <div class="contenido">
                        <p>La visión para finales de este el 2024 es ya estar además de nuestro pais, también en otros como: Chile, Argentina, venezuela y ecuador, etc. Ya que para poder crecer no solo como empresa, sino que también como una comunidad unida y poder expandirnos a más. Además también tener más lugares en donde poder entregar sus pedidos...</p>
                        <center>
                        <input type="submit" value="LEER MÁS" class="boton">
                        </center>
                    </div>
                </article>
                    
                    <article class="caja" height="350">
                        <h4>OBJETIVO</h4>
                    <img src="img/descarga.jfif" class="efecto">
                        <div class="contenido">
                        <p>Solucionar problemas sobre compras en lineas inestables o inseguras que no son de confiar, también poder ser la pagina segura y comoda que nuestra comunidad pueda usar para que los problemas de otros sitios wed no se presenten en este y seamos su sitio de compras en linea de confianza para ti y todas las personas que quieran...</p>
                        <center>
                        <input type="submit" value="LEER MÁS" class="boton">
                        </center>
                    </div>
                </article>
        

                </div>
            </section>  
    </main>
        


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
