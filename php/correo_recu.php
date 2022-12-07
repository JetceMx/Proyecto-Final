<?php
//Falta creacion de la contraseña temporal
session_start();
$mail="sebasterra69@gmail.com";
//$mail = $_POST['email'];
$asunto = 'Sabinito Games';
$msj=" temp";

mail($mail,$asunto,$msj);
?>