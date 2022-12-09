<?php
include_once "header.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Style-Global.css">
    <link rel="stylesheet" href="../css/Style-index.css">
    <title>Inicio</title>
</head>

<body>

    <!-- CARRUSEL DESDE AQUI  -->
    <div id="slideshow-container">
        <img class="mySlides fade" src="../images/Juego_1.jpg">
        <img class="mySlides fade" src="../images/Juego_2.jpg">
        <img class="mySlides fade" src="../images/Juego_3.jpg">
        <img class="mySlides fade" src="../images/Juego_4.jpg">
        <img class="mySlides fade" src="../images/Juego_5.jpg">
    </div>
    <!-- FIN CARRUSEL -->

    <div id="recuadro-1">
        <h1>CADA DIA MÁS GAMER</h2>
    </div>

    <div id="recuadro-2">
        <h1>MÁS VENDIDOS</h1>

        <?php
        include_once "Carousel.php";
        ?>

    </div>

    <br><br><br><br><br><br><br><br><br>

    <div id="recuadro-3">
        <div id="img-categoria" class="categoria">
            <img src="../images/Consolas.webp" alt="">
            <h2>Consolas</h2>
        </div>
        <div class="categoria">
            <img src="../images/Accesorios.jpg" alt="">
            <h2>Accesorios</h2>
        </div>
        <div class="categoria">
            <img src="../images/Controles.jpg" alt="">
            <h2>Controles</h2>
        </div>
    </div>

    <div id="recuadro-4">
        <h1>BOLETÍN</h1>
        <p>Suscríbete al boletín de noticias de productos y ofertas especiales</p>
        <p>Email *</p>
        <form action="correo_cupon.php" method="POST">
            <input type="email" name="cupon" class="campo" placeholder="Introduce tu correo electrónico">
            <input type="submit" value="Suscribir" class="btn-Sus">
        </form>
    </div>

    <div id="recuadro-5">
        <h2>Recuadro con cambios para que neta se vean</h2>
    </div>

    <!-- Scripts -->
    <script src="../js/Carrusel.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script>
        var current = 0;
        var imagenes = new Array();

        $(document).ready(function () {
            var numImages = 6;
            if (numImages <= 3) {
                $('.right-arrow').css('display', 'none');
                $('.left-arrow').css('display', 'none');
            }

            $('.left-arrow').on('click', function () {
                if (current > 0) {
                    current = current - 1;
                } else {
                    current = numImages - 3;
                }

                $(".carrusel").animate({ "left": -($('#product_' + current).position().left) }, 600);

                return false;
            });

            $('.left-arrow').on('hover', function () {
                $(this).css('opacity', '0.5');
            }, function () {
                $(this).css('opacity', '1');
            });

            $('.right-arrow').on('hover', function () {
                $(this).css('opacity', '0.5');
            }, function () {
                $(this).css('opacity', '1');
            });

            $('.right-arrow').on('click', function () {
                if (numImages > current + 3) {
                    current = current + 1;
                } else {
                    current = 0;
                }

                $(".carrusel").animate({ "left": -($('#product_' + current).position().left) }, 600);

                return false;
            });
        });
    </script>
    <?php
    include "footer.php";
    ?>

</body>

</html>