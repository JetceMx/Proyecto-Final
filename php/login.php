<?php

$servidor = 'localhost';
$cuenta = 'root';
$password = 'Sandia2016.!';
$bd = 'loginvai';

//conexion a la base de datos
$conexion = new mysqli($servidor, $cuenta, $password, $bd);

if ($conexion->connect_errno) {
    die('Error en la conexion');
} else {

    // Solo la parte de las cookies
    if (!empty($_POST["remember"])) {
        setcookie("txtcorreo", $_POST["txtcorreo"], time() + 3600);
        setcookie("txtpassword", $_POST["txtpassword"], time() + 3600);
        echo "Cookies set successfuly <br>";
    } else {
        setcookie("username", "");
        setcookie("password", "");
        echo "Cookies not set";
    }
    // Fin cookies

    // Validacion de que exista el usuario
    $correo = $_POST['txtcorreo'];
    $contrsena = $_POST['txtpassword'];
    $passFuerte = md5($contrsena);

    if (isset($_POST['btnlogin'])) {
        $queryusuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$passFuerte'");
        $nr = mysqli_num_rows($queryusuario);
        if (($nr == 1)) {
            echo "<br>Bienvenido!";
        } else {
?>

<!-- Por mejorar esta alerta con alguna de las que hicimos en clase -->
<script>
    alert('No se encontró ningun usuario!');
    location.href = "Form_login.php";
</script>

<?php
        }
    }

}
?>