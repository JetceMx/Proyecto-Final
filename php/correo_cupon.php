<?php


$mail = $_POST['cupon'];
$asunto = 'Sabinito Games';
$men = "Gracias por suscibirte ten un cupon !!!" . "\n\r" . "https://sabinitogames.shop/images/cupon.png";

mail($mail, $asunto, $men);
?>
<script>

   location.href = "Inicio.php";
</script>