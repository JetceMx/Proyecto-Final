<?php
    $servidor = 'localhost';
    $cuenta = 'root';
    $password = '';
    $bd = 'login';
    
    //conexion a la base de datos
    $conexion = new mysqli($servidor, $cuenta, $password, $bd);
    
    if ($conexion->connect_errno) {
        die('Error en la conexion');

    }else{
        echo $_POST["contranew"];
        $user2=$_POST["user"];
        $aux=$_POST["contranew"];
        $new=base64_encode($aux);
        $actualizar="UPDATE login.usuarios SET contraseña='$new' WHERE usuario='$user2'";
        $conexion->query($actualizar);
        ?>
        <script>
            alert('Tu cuenta a sido desbloqueada ');
           location.href = "Login-front.php";
        </script>
        <?php
    }
?>

