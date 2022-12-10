<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Style-Global.css">
    <link rel="stylesheet" href="../css/Style-header.css">
    <script src="https://kit.fontawesome.com/3d7b0db529.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../images/consola-de-juego.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
</head>

<body>
    <header class="encabezado">
        <a href="Inicio.php" class="logo">
            <img id="img_logo" src="../images/logo (1).gif" alt="Logo Sabinito Games">
            <h2 class="nombre-empresa">Sabinito Games</h2>
        </a>
        <div class="buscar">
            <input id="input_bus" type="text" placeholder=" Buscar  " required>
            <div class="btn-buscar">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
        <nav>
            <a class="a_general" href="Inicio.php" class="nav-link">Inicio</a>
            <a class="a_general" href="Tienda.php" class="nav-link">Tienda</a>
            <a class="a_general" href="AcercaDe.php" class="nav-link">Acerca De</a>
            <a class="a_general" href="Contactanos.php" class="nav-link">Contáctanos</a>
            <a class="a_general" href="Ayuda.php" class="nav-link">Ayuda</a>
            <?php
            date_default_timezone_set('America/Mexico_City');
            $today = getdate();
            $hora = $today["hours"];

            $usrh = "";
            if ($hora <= 12) {
                $usrh = "Buenos dias ";
            } elseif ($hora < 19 && $hora > 12) {
                $usrh = "Buenas tardes ";
            } elseif ($hora <= 24 && $hora >= 19) {
                $usrh = "Buenas noches ";
            }
            session_start();
            if (isset($_SESSION['usuario']) && $_SESSION["usuario"] != "admin") {
                $var = $usrh . $_SESSION['usuario'];
            ?>
            <a class="nav-link">
                <?php
                echo $var;
                ?>

            </a>

            <div class="dropdown">
                <i class="fa-solid fa-user dropbtn" onclick="myFunction()"></i>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#">Mis pedidos</a>
                    <a href="#">Mis direcciones</a>
                    <a href="#">Mi billetera</a>
                    <a href="#">Mis suscripciones</a>
                    <a href="actualizar.php">Mi cuenta</a>
                    <hr>
                    <a href="logout.php">Salir</a>
                </div>
            </div>
            <?php

            } elseif (isset($_SESSION["usuario"]) && $_SESSION["usuario"] == "admin") {
                date_default_timezone_set('America/Mexico_City');
                $today = getdate();
                $hora = $today["hours"];

                $usrh = "";
                if ($hora <= 12) {
                    $usrh = "Buenos dias ";
                } elseif ($hora < 19 && $hora > 12) {
                    $usrh = "Buenas tardes ";
                } elseif ($hora <= 24 && $hora >= 19) {
                    $usrh = "Buenas noches ";
                }

                $var = $usrh . $_SESSION['usuario'];
            ?>


            <a class="nav-link">
                <?php
                echo $var;
                ?>

            </a>

            <div class="dropdown">
                <i class="fa-solid fa-user dropbtn" onclick="myFunction()"></i>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#">Mis pedidos</a>
                    <a href="#">Mis direcciones</a>
                    <a href="#">Mi billetera</a>
                    <a href="#">Mis suscripciones</a>
                    <a href="actualizar.php">Mi cuenta</a>
                    <a href="AdminOpciones.php">Administracion</a>
                    <hr>
                    <a href="logout.php">Salir</a>
                </div>
            </div>
            <?php
            } else {
            ?>
            <div class="dropdown">
                <i class="fa-solid fa-user dropbtn" onclick="myFunction()"></i>
                <div id="myDropdown" class="dropdown-content">
                    <hr>
                    <a href="Login-Front.php">Iniciar Sesion</a>
                </div>
            </div>
            <?php
            }
            ?>

            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </nav>
    </header>

    <script>
        /* When the user clicks on the button, toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>

</body>

</html>