<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador del sitio</title>
    <!-- font Awesome Cdn -->
    <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>
    
    <!--Icono de la pagina-->
    <link rel="shortcut icon" href="img/cheve.png" type="image/x-icon">

    <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- CSS File -->
    <link rel="stylesheet" type="text/css" href="css/estiloAdmin.css">
</head>
<body>
    <header class="header trans_300">
    
        <!-- main Navigation -->

        <div class="main_nav_container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <!-- Titulo  -->
                        <div class="logo_container">

                            <a href="inicio.php"><span>MINI SUPER</span> EL GÜERO</a>
                        </div>

                        <!-- Creacion de menú  -->
                        <nav class="navbar">

                            <u1 class="navbar_menu">
                                <li><a href="inicio.php">Inicio</a></li>
                                <li><a href="ventas.php">Ventas</a></li>
                                <li><a href="productos.php">Productos</a></li>
                                <li><a href="categorias.php">categorias</a></li>
                            </u1>
            

                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header>
        <main>
            <h2 class="text-center"><span>Bienvenido administrador</span></h2>
            <div id="botones" class="text-center">
                <a class="as" href="ventas.php"><button class="boton"><img src="img/ventas.png">Ventas</button></a>
                <a class="as" href="productos.php"><button class="boton"><img src="img/productos.png">Productos</button></a>
                <a class="as" href="categorias.php"><button class="boton"><img src="img/categorias.png">Categorias</button></a>
            </div>
        </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_nav-container">
                            <div class="cr">Todos los derechos reservados 2021 &copy;</div>
                        </div>
                    </div>
            </div>
        </div>
    </footer>
</body>
</html>