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
   
   <form class="animate__animated animate__backInDown">
  <h1>Iniciar Sesion</h1>
  <div class="inset">
  <p>
    <label for="email">Usuario</label>
    <input type="text" name="Usuario" id="User">
  </p>
  <p>
    <label for="password">Contraseña</label>
    <input type="password" name="Contraseña" id="Pass">
  </p>
  <p>
    <input type="checkbox" name="remember" id="remember">
    <label for="remember">Recordar Usuario</label>
  </p>
  </div>
  <p class="p-container">
    <span>Olvidaste Tu Contraseña ?</span>
    <input type="submit" name="go" id="go" value="Log in">
  </p>
</form>
   
   <?php
    include "footer.php";
    ?>
    
</body>
</html>