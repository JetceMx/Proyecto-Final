<?php


$mail = $_POST['cupon'];
$asunto = 'Sabinito Games';
$men="<img src='https://sabinitogames.shop/images/cupon.png'> ";

mail($mail,$asunto,$men);
?>
<script>
    
   location.href = "Inicio.php";
</script>
