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

         <!---- Codigo en php que pone la tabla, hace conexion a la base de datos y hace un select para mostrar lo que hay  ------------------------------>

            <h2 class="text-center">Administrador de Categorias</h2>
            <br>
        <?php
        echo "<table class='table table-dark table-hover'>";
        echo "<tr><th>Categoria</th><th>Imagen</th><th>Descripcion</th><th>Subcategoria de</th><th>Editar</th><th>Eliminar</th></tr>";

        class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current() {
            return "<td>" . parent::current(). "</td>";
        }

        function beginChildren() {
            echo "<tr>";
        }

        function endChildren() {
            echo "</tr>" . "\n";
         }
        }

        $servername = "localhost";
        $username = "minisuperelwero";
        $password = "elwero167.5";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$username", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT `categoria`,`imgCat`,`descCat`,`catPadre` FROM `categorias`");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $consul = new TableRows(new RecursiveArrayIterator($result));

        foreach($consul as $k=>$v) {
            if (strstr($v, 'img/')) {
                $src=stristr($v,'img/');
                $src=stristr($src,'</td>', true);
                echo '<td><a href="../'.$src.'" target="_blank"> <img style="height: 50px;" src="../'.$src.'"></td>';
            } else{
                echo $v;
            }       
        }

        } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        }

        $conn = null;
        echo "</table>";
?> 
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
<?php
    $conn = null;
?>