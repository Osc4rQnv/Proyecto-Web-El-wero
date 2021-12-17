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
                            <a><span>MINI SUPER</span> EL GÜERO</a>
                        </div>
                        <!-- Creacion de menú  -->
                        <nav class="navbar">
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header>
        <main>
            <h2 class="text-center">¿Eres el administrador?, Inicia sesion</h2>
            <div id="login">
                <form action="/login.php" class="log">
                    <div class="form-group">
                        <label for="email" id="ma">Correo electronico:</label>
                        <input type="email" class="form-control" placeholder="Correo electronico" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd" id="ma">Contraseña:</label>
                        <input type="password" class="form-control" placeholder="Contraseña" id="pwd">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Iniciar sesion</button>
                    </div>
                </form> 
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