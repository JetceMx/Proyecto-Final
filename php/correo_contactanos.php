<?php
//Falta creacion de la contraseña temporal

$mail = "blog.isc22@gmail.com";
$asunto = 'Sabinito Games-Contactanos';
$head= $_POST["nombre"]." ".$_POST["apell"]." ".$_POST["mail"];
$msj = $_POST["msj"];

mail($mail, $asunto, $msj,$head);
?>
<script>
   
    location.href = "Login-Front.php";
</script>