<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Style-Registro.css">
    <script src="https://kit.fontawesome.com/3d7b0db529.js" crossorigin="anonymous"></script>
    <title>Registro-front</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>

<body>
<form class="animate__animated animate__backInDown" method="POST" action="Registro.php">
  <h1 class="titulo">Registrate</h1>
  <div class="inset">
  <p>
    <label for="Nombre">Nombre completo</label>
    <input type="text" name="Nombre" id="Name">
  </p>
  <p>
    <label for="Usuario">Nombre de usuario</label>
    <input type="password" name="Usuario" id="User">
  </p>
  <p>
    <label for="email">Correo electronico</label>
    <input type="text" name="email" id="correo">
  </p>
  <p>
    <label for="password">Contraseña</label>
    <input type="password" name="Contraseña" id="Pass">
  </p>
  </div>
  <div class="capt">
    <img src="get_captcha.php" alt="CAPTCHA" class="captcha-image"><i class="fas fa-redo refresh-captcha"></i>
    <br>
    <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">
</div>
    <script>
        var refreshButton = document.querySelector(".refresh-captcha");
        refreshButton.onclick = function() {
            document.querySelector(".captcha-image").src = 'get_captcha.php?' + Date.now();
        }
    </script>

  <p class="p-container">
  ¿Ya tienes cuenta? <br> <a href="http://localhost/Trabajos/Prueba/php/Login-Front.php"><span>Inicia sesión</span></a>
    <input type="submit" name="registro" id="registro" value="Registrarte">
  </p>
</form>
   
   <?php
    include "footer.php";
    ?>

</body>

</html>