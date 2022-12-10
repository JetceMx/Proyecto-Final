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
    <link rel="stylesheet" href="../css/Style-AdminOpc.css">
    <title>Opciones de productos</title>
</head>

<body>
    <br>
    <div class="opcionesAdmin">
        <h1>Bienvenido !</h1>
        <div class="opcion">
            <a href="AltaProd.php">Alta de productos</a>
        </div>
        <div class="opcion">
            <a href="ModiProd.php">Modificar productos</a>
        </div>
        <div class="opcion">
            <a href="BajaProd.php">Borrar productos</a>
        </div>
        <div class="opcion">
            <a href="#">Ver gráficas</a>
        </div>
    </div>
    <br>
    <?php
    include "footer.php";
    ?>

</body>

</html>