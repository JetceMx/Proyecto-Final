<?php
    $servidor = 'localhost';
    $cuenta = 'u780407792_Admin1';
    $password = 'Qv4WEmXN';
    $bd = 'u780407792_BD';
    
    //conexion a la base de datos
    $conexion = new mysqli($servidor, $cuenta, $password, $bd);
    
    if ($conexion->connect_errno) {
        die('Error en la conexion');

    }else{
        
        $user2=$_POST["user"];
        $aux=$_POST["contranew"];
        $new=base64_encode($aux);
        $actualizar="UPDATE u780407792_BD.usuarios SET contraseña='$new' WHERE usuario='$user2'";
        $conexion->query($actualizar);
        ?>
        <script>
            alert('Tu cuenta a sido desbloqueada ');
           location.href = "Login-Front.php";
        </script>
        <?php
    }
?>

