<?php
//Falta creacion de la contraseña temporal

$mail = $_POST['correorecu'];
$asunto = 'Sabinito Games';
$msj=" temp";

mail($mail,$asunto,$msj);
?>