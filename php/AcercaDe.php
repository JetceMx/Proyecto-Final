<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Style-Global.css">
    <link rel="stylesheet" href="../css/Style-AcercaDe.css">
    <title>Acerca De</title>
</head>

<body>
    <div id="ad_titulo">
        <h2>Acerca de nosotros</h2>
    </div>
    <br>
    <div class="ad_contenido">
        <?php
        date_default_timezone_set("America/Mexico_City");
        echo date("F j, Y, g:i a");
        ?>
        <h2> ¿Quiénes somos? </h1>
            Somos una compañía de capacitación tecnológica, certificando y capacitando a universitarios y
            profesionistas,
            generando especialistas en alta tecnología para cubrir la gran demanda del mercado. Contamos con alianzas
            con las primordiales
            empresas, marcas y universidades de la nación, así como con proyectos gubernamentales, para una fácil
            colocación laboral.
    </div>
    <br>
    <div class="ad_contenido">
        <h2>¿Porqué certificarte con nosotros? </h2>
        Nuestras certificaciones ofrecen una ventaja profesional y competitiva, con reconocimiento a nivel global y
        aprobada por las
        empresas, valorada por nuestras amplias aptitudes.
    </div>
    <br>
    <div class="ad_contenido">
        <h2>Misión</h2>
        Ofrecer las mejores certificaciones a los universitarios, profesionistas y programadores del sector tecnológico
        para cubrir
        las necesidades de las empresas y el mercado, desarrollar que sean de calidad y efectividad.
    </div>
    <br>
    <div class="ad_contenido">
        <h2>Visión</h2>
        Ser líder de certificaciones de talla internacional y nacional. Generar un país de talentos, que realicen los
        mejores sistemas
        y desarrollo de innovaciones, y poder sustentar el mercado laboral.
    </div>
    <?php
    include "footer.php";
    ?>

</body>

</html>