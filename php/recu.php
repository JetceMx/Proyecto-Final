<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/Style-Login.css">
  <script src="https://kit.fontawesome.com/3d7b0db529.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

  <div class="formulario">
    <form class="animate__animated animate__backInDown" method="POST" action="correo_recu.php">
      <h1>Recuperar cuenta</h1>
      <div class="inset">
        <p>Tu cuenta fue bloqueda ingresa un correo para mandar tu recuperacion</p>
        <p>
          <label for="email">Correo</label>
          <input type="text" name="recu" id="User">
        </p>
        <p class="p-container">
          <input type="submit" name="go" id="go" value="Enviar">
        </p>
    </form>
  </div>
  <br><br><br><br><br>
  <?php
  include "footer.php";
  ?>
</body>

</html>