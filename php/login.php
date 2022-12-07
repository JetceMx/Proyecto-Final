<?php
session_start();

$servidor = 'localhost';
$cuenta = 'root';
$password = '';
$bd = 'login';

//conexion a la base de datos
$conexion = new mysqli($servidor, $cuenta, $password, $bd);

if ($conexion->connect_errno) {
    die('Error en la conexion');
} else {

    // Solo la parte de las cookies
    if (!empty($_POST["remember"])) {
        setcookie("txtusr",$_POST["txtusr"],time() + 3600);
       
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
        
            $_SESSION["usuario"]=$usr;
            $_SESSION["pass"]=$_POST["txtpassword"];
            ?>
                <script>
                    location.href = "index.php";
                </script>
            <?php
        } else {

?>
<?php
   
    $_SESSION["contador"] = $_SESSION["contador"]+1;
   
    if($_SESSION["contador"] >= 3){
        $_SESSION["contador"]=0;
        
        $aux="temp";
        $new=base64_encode($aux);
        $actualizar="UPDATE login.usuarios SET contraseña='$new' WHERE usuario='$usr'";
        $conexion->query($actualizar);
       
    }
?>
<!-- Por mejorar esta alerta con alguna de las que hicimos en clase -->
<script>
    alert('No se encontró ningun usuario!...Recuerda que tienes 3 intentos para Iniciar Sesion');
   location.href = "Login-front.php";
</script>

<?php
        }
    }

}
?>
