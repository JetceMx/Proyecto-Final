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
    <link rel="stylesheet" href="../css/Style-Pedido.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://kit.fontawesome.com/3d7b0db529.js" crossorigin="anonymous"></script>
    <title>Ayuda</title>

</head>

<body>
    
<form class="animate__animated animate__backInDown" method="POST">
    <h1>Datos de envío</h1>
    <div class="inset">
       
      <p>
        <label for="Nombre">Nombre completo</label>
        <input type="text" name="txtname" id="Nombre">
      </p>
      <p>
        <label for="email">Direccion email</label>
        <input type="text" name="txtemail" id="email">
      </p>
      <p>
        <label for="Direccion">Direccion</label>
        <input type="text" name="txtdir" id="Direccion">
      </p>
      <p>
        <label for="Ciudad">Ciudad</label>
        <input type="text" name="txtciudad" id="Ciudad">
      </p>
      <p>
        <label for="Pais">País</label>
        <input type="text" name="txtpais" id="Pais">
      </p>
      <p>
        <label for="Postal">Código postal</label>
        <input type="text" name="txtpostal" id="Postal">
      </p>
      <p>
        <label for="Telefono">Número de telefono</label>
        <input type="text" name="txtnum" id="Telefono">
      </p>

    </div>
    <p class="p-container">
      <input type="submit" name="pedido" id="pedido" value="Solicitar">
    </p>
  </form>




    <?php
        include "footer.php";
    ?>

</body>


</html>