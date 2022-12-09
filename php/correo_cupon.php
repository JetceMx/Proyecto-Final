<?php


$mail = $_POST['cupon'];
$asunto = 'Sabinito Games';
$men="Hola gracias por suscribirte aqui tienes un cupon!!! <br><img src='https://ibb.co/f8D3PC6'> ";

mail($mail,$asunto,$men);
?>
<script>
    
   location.href = "index.php";
</script>