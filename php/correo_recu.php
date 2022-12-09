<?php
//Falta creacion de la contraseña temporal

$mail = $_POST['recu'];
$asunto = 'Sabinito Games';
$msj="La contraseña de tu cuenta es: temp";

mail($mail,$asunto,$msj);
?>
<script>
    alert('Tu cuenta a sido desbloqueada ');
   location.href = "Login-Front.php";
</script>