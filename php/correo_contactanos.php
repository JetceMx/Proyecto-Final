<?php


$mail = $_POST['email'];
$asunto = 'Sabinito Games';

$header = "Nos contactaremos contigo en la brevedad posible" . "\r\n";
mail($mail, $asunto, $header);
?>