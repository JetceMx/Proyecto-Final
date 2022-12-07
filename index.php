<?php
include_once "header.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Style-Global.css">
    <link rel="stylesheet" href="css/Style-index.css">
    <title>Inicio</title>
</head>

<body>

    <!-- CARRUSEL DESDE AQUI  -->
    <div id=slideshow-container">
        <img class="mySlides fade" src="images/Juego_1.jpg">
        <img class="mySlides fade" src="images/Juego_2.jpg">
        <img class="mySlides fade" src="images/Juego_3.jpg">
        <img class="mySlides fade" src="images/Juego_4.jpg">
        <img class="mySlides fade" src="images/Juego_5.jpg">
    </div>
    <!-- FIN CARRUSEL -->

    <div id="recuadro-1">
        <h2>Más vendidos!</h2>
    </div>

    <div id="recuadro-2">
        <h2>Cada dia más gamer!</h2>
    </div>

    <div id="recuadro-3">
        <div class="categoria">
            <img src="images/Productos/sx.png" alt="">
            <h2>Consolas</h2>
        </div>
        <div class="categoria">
            <img src="images/Productos/raton3_copia_2.png" alt="">
            <h2>Accesorios</h2>
        </div>
        <div class="categoria">
            <img src="images/Productos/CONTROL1.png" alt="">
            <h2>Controles</h2>
        </div>
    </div>

    <div id="recuadro-4">
        <img src="images/cupon.png" alt="">
    </div>

    <!-- Scripts -->
    <script src="js/Carrusel.js"></script>
    <br>

    <?php
    include "footer.php";
    ?>

</body>

</html>