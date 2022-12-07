<?php
//Falta creacion de la contraseña temporal

$mail = $_POST['recu'];
$asunto = 'Sabinito Games';
$msj=" temp";

mail($mail,$asunto,$msj);
?>