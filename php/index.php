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
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="../images/Juego_1.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="../images/Juego_2.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="../images/Juego_3.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="../images/Juego_4.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="../images/Juego_5.jpg" style="width:100%">
        </div>
    </div>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>
    <!-- FIN CARRUSEL -->

    <br><br><br><br><br>
    <div id="fondo-1">
    </div>

    <!-- Scripts -->
    <script src="../js/Carrusel.js"></script>
    <br>

    <?php
    include "footer.php";
    ?>

</body>

</html>