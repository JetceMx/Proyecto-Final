<?php
session_start();

$servidor = 'localhost';
$cuenta = 'u780407792_Admin1';
$password = 'Qv4WEmXN';
$bd = 'u780407792_BD';

//conexion a la base de datos
$conexion = new mysqli($servidor, $cuenta, $password, $bd);

if ($conexion->connect_errno) {
    die('Error en la conexion');
} else {

    // Solo la parte de las cookies
    if (!empty($_POST["remember"])) {
        setcookie("txtusr", $_POST["txtusr"], time() + 3600);

        setcookie("txtpassword", $_POST["txtpassword"], time() + 3600);

    } else {
        setcookie("usr", "");
        setcookie("email", "");
        setcookie("password", "");

    }
    // Fin cookies

    // Validacion de que exista el usuario
    $usr = $_POST["txtusr"];

    $contrsena = $_POST['txtpassword'];
    $passFuerte = base64_encode($contrsena);

    if (isset($_POST['go'])) {
        $queryusuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usr' AND contraseña = '$passFuerte'");
        $nr = mysqli_num_rows($queryusuario);
        if ($nr == 1) {

            $_SESSION["usuario"] = $usr;
            $_SESSION["pass"] = $_POST["txtpassword"];
?>
<script>
    location.href = "Inicio.php";
</script>
<?php
        } else {

            ?>
<?php

            $_SESSION["contador"] = $_SESSION["contador"] + 1;

            if ($_SESSION["contador"] >= 3) {
                $_SESSION["contador"] = 0;

                $aux = "temp";
                $aux2 = $aux;
                $new = base64_encode($aux2);
                $actualizar = "UPDATE u780407792_BD.usuarios SET contraseña='$new' WHERE usuario='$usr'";
                $conexion->query($actualizar);
                header("location: recu.php");
            }
?>
<!-- Por mejorar esta alerta con alguna de las que hicimos en clase -->
<script>
    alert('No se encontró ningun usuario!...Recuerda que tienes 3 intentos para Iniciar Sesion');
    location.href = "Login-Front.php";
</script>

<?php
        }
    }

}
?>