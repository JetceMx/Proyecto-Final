<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Style-Global.css">
    <link rel="stylesheet" href="../css/Style-header.css">
    <script src="https://kit.fontawesome.com/3d7b0db529.js" crossorigin="anonymous"></script>
    <title>Header</title>
</head>

<body>
    <header>
        <a href="#" class="logo">
            <img src="../images/logo (1).gif" alt="Logo Sabinito Games">
            <h2 class="nombre-empresa">Sabinito Games</h2>
        </a>
        <div class="buscar">
            <input type="text" placeholder=" Buscar" required>
            <div class="btn-buscar">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
        <nav>
            <a href="#" class="nav-link">Inicio</a>
            <a href="#" class="nav-link">Tienda</a>
            <a href="#" class="nav-link">Acerca De</a>
            <a href="#" class="nav-link">Contáctanos</a>
            <a href="#" class="nav-link">Ayuda</a>

            <div class="dropdown">
                <i class="fa-solid fa-user dropbtn" onclick="myFunction()"></i>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#">Mis pedidos</a>
                    <a href="#">Mis direcciones</a>
                    <a href="#">Mi billetera</a>
                    <a href="#">Mis suscripciones</a>
                    <a href="#">Mi cuenta</a>
                    <hr>
                    <a href="#">Salir</a>
                </div>
            </div>

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