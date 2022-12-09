<?php


$mail = $_POST['cupon'];
$asunto = 'Sabinito Games';
$men="<html>
      <body>
      <p>Gracias por suscribirte ten un cupon!!!</p>
      <br>
      <img src='https://ibb.co/f8D3PC6'> 
      </body>
      </html>";

mail($mail,$asunto,$men);
?>
<script>
    
   location.href = "Inicio.php";
</script>
