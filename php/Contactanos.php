<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Style-Global.css">
    <link rel="stylesheet" href="../css/Style-header.css">
    <link rel="stylesheet" href="../css/Style-footer.css">
    <link rel="stylesheet" href="../css/Style-Contactanos.css">
    <script src="https://kit.fontawesome.com/3d7b0db529.js" crossorigin="anonymous"></script>
    <title>Coctactanos</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>

<body class="Cuerpo">

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


    <h1 id="Titulo" class="animate__animated animate__flip">CONTACTANOS</h1>

    <table>

        <td class="animate__animated animate__backInLeft" >
            <div class="Contactanos">

                <p>gamessabinito@gmail.com</p>

                <pre>Lic. Benito Juárez, Zona Centro, 
20000 Aguascalientes, 
Mexico.</pre>

                <iframe class="Mapa"
                    src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d246.8572676703629!2d-102.29617696647885!3d21.883383318677833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x8429ee63a0cec445%3A0x5fdaa3a7019333ae!2sLic.%20Benito%20Ju%C3%A1rez%2C%20Zona%20Centro%2C%2020000%20Aguascalientes%2C%20Ags.!3m2!1d21.8833888!2d-102.2961897!5e0!3m2!1ses-419!2smx!4v1670027078668!5m2!1ses-419!2smx"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>


            </div>
        </td>



         <td class="animate__animated animate__backInRight" >

            <div class="Formulario">

                <form action="correo_contactanos.php">

                    <table>

                        <tr>
                            <td>Nombre</td>
                            <td>Apellido</td>
                        </tr>

                        <tr>
                            <td><input type="text" class="Texto1"  required></td>
                            <td><input type="text" class="Texto2" name="email" required></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td>Telefono</td>
                        </tr>

                        <tr>
                            <td><input type="text" class="Texto3" required></td>
                            <td><input type="text" class="Texto4" required></td>
                        </tr>

                        <tr>
                            <td>Dejanos un Mensaje</td>
                        </tr>

                        <tr>
                            <td colspan="2"><textarea rows="8" cols="43"></textarea></td>

                        <tr>

                            <td colspan="2"><input type="submit" class="Boton" value="ENVIAR" ></td>

                        </tr>




                    </table>





                </form>

            </div>
        </td>

    </table>





    <footer class="pie-pagina">

        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="../images/logo (1).gif" alt="Logo Sabinito Games">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>Productos</h2>
                <a href="#">Consolas</a>
                <a href="#">Controles</a>
                <a href="#">Accesorios</a>
            </div>
            <div class="box">
                <h2>Tienda</h2>
                <p>Lic. Benito Juárez, Zona Centro, 20000 Aguascalientes, Ags., México</p>
                <p>Lun - Vie: 8:00 - 22:00 hrs</p>
                <p>gamessabinito@gmail.com</p>
            </div>
            <div class="box">
                <h2>Siguenos</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
            <div class="box">
                <h2>Politica</h2>
                <a href="#">FAQ</a>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Sabinitos Games</b> - Todos los derechos reservados.</small>
        </div>

    </footer>

</body>

</html>