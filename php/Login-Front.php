<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Style-Login.css">
    <script src="https://kit.fontawesome.com/3d7b0db529.js" crossorigin="anonymous"></script>
    <title>Login-front</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
   
   <form class="animate__animated animate__backInDown" method="POST" action="login.php">
  <h1>Iniciar Sesion</h1>
  <div class="inset">
  <p>
  <label for="email">Usuario</label>
    <input type="text" name="txtusr" id="User">
  </p>
  <p>
    <label for="password">Contraseña</label>
    <input type="password" name="txtpassword" id="Pass">
  </p>
  <p>
    <input type="checkbox" name="remember" id="remember">
    <label for="remember">Recordar Usuario</label>
  </p>
  </div>
  <div class="p-container">
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
    <!--<span>Crear Cuenta</span> -->
    <a href="Registro-front.php" class linkr>Crear cuenta</a>
    <input type="submit" name="go" id="go" value="Enviar">
  </p>
</form>
   
   <?php
    include "footer.php";
    ?>

</body>
</html>