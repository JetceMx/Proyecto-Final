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
  <link rel="stylesheet" href="../css/Style-Login.css">
  <script src="https://kit.fontawesome.com/3d7b0db529.js" crossorigin="anonymous"></script>
  <title>Login-front</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
  <div class="formulario">
    <form class="animate__animated animate__backInDown" method="POST" action="cambiarpass.php">
      <h1>Cambiar Contraseña</h1>
      <div class="inset">
        <p>
          <label for="email">Escribe tu usuario</label>
          <input type="text" name="user" id="pass">
        </p>
        <p>
          <label for="email">Contraseña</label>
          <input type="password" name="contranew" id="pass">
        </p>
        <p>
          <label for="password"> Vuelve a ingresar la Contraseña</label>
          <input type="password" name="contranew2" id="Pass">
        </p>
        <p class="p-container">
          <input type="submit" name="go" id="cambiar" value="Enviar">
        </p>
    </form>
  </div>
  <br><br><br>
  <?php
  include "footer.php";
  ?>

</body>

</html>