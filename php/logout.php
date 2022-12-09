<?php


session_start();

 $SESSION_UNSET;
$_SESSION['usuario']="";
session_destroy();

# Finalmente lo redireccionamos al formulario
header("Location: Inicio.php");
?>