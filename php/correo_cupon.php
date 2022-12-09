<?php


$mail = $_POST['cupon'];
$asunto = 'Sabinito Games';
$men="Hola gracias por suscribirte aqui tienes un cupon!!! <br><img src='../images/cupon.png'> ";

mail($mail,$asunto,$men);
?>
<script>
    
   location.href = "index.php";
</script>