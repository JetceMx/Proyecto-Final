<?php


$mail = $_POST['cupon'];
$asunto = 'Sabinito Games';
$men="<img src='../images/cupon.png'>";
$header = "Ten un cupon por suscribirte!!!!!"."\r\n";
mail($mail,$asunto,$men,$header);
?>