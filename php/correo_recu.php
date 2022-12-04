<?php
//Falta creacion de la contraseña temporal

$mail = $_POST['email'];
$asunto = 'Sabinito Games';
$msj=" ";
$header = "Nos contactaremos contigo en la brevedad posible"."\r\n";
mail($mail,$asunto,$msj,$header);
?>