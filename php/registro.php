<?php

$servidor = 'localhost';
$cuenta = 'root';
$password = '';
$bd = 'login';

//conexion a la base de datos
$conexion = new mysqli($servidor, $cuenta, $password, $bd);

if ($conexion->connect_errno) {
    die('Error en la conexion');
} else {
   
    $usr = $_POST["txtusr"];
    $nombre = $_POST['txtnombre'];
    $correo = $_POST['txtcorreo'];
    $contrasena = $_POST['txtpassword'];
    $contrasena2 = $_POST['txtpassword2'];
    $passFuerte = base64_encode($contrasena);

    if ($contrasena == $contrasena2) {
        if (isset($_POST['registro'])) {
            $insert = "insert into usuarios(usuario, contraseña, correo, nombre) values('" . $usr . "' , '" . $passFuerte . "' , '" . $correo . "' , '" . $nombre . "' )";
            $return = mysqli_query($conexion, $insert);
        }
    } else {
?>

<!-- Por mejorar esta alerta con alguna de las que hicimos en clase -->
<script>
    alert('Las claves no coinciden');
    location.href = "index.php";
</script>

<?php
    }

    //print_r(($return));
    mysqli_close($conexion);
    ?>
    <script>
        alert('Las claves no coinciden');
        location.href = "login-front.php";
    </script>
    <?php
}

?>