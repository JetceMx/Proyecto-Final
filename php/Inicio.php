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
        <div class="r-1_hijo1">
            <h1>¡CADA DIA MÁS GAMER!</h2>
                <img src="../images/Santa.png" alt="">
        </div>
        <div class="r-1_hijo2">
            <img src="../images/Cupon2.jpeg" alt="">
        </div>
    </div>

    <div id="recuadro-2">
        <div id="titulo">
            <h1>MÁS VENDIDOS</h1>
        </div>
        <div class="centrado">
            <?php
            include_once "Carousel.php";
            ?>
        </div>
    </div>

    <div id="recuadro-3">
        <h1>CATEGORÍAS</h1>
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
        <div class="r-4_hijo">
            <br>
            <h1>BOLETÍN</h1>
            <br>
            <p>Suscríbete al boletín de noticias de productos y ofertas especiales</p>
            <p>Email *</p>
            <form action="correo_cupon.php" method="POST">
                <input type="email" name="cupon" class="campo" placeholder="Introduce tu correo electrónico">
                <input type="submit" value="Suscribete!" class="btn-Sus">
            </form>
        </div>
    </div>
    <!-- Scripts -->
    <script src="../js/Carrusel.js"></script>
    <?php
    include "footer.php";
    ?>

</body>

</html>