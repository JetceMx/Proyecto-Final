<?php

$servidor = 'localhost:33065';
$cuenta = 'root';
$password = '';
$bd = 'productos';

// CONEXION A BASE DE DATOS...

$conexion = new mysqli($servidor, $cuenta, $password, $bd);

if ($conexion->connect_errno) {
    die('Error en la conexion'); // CONEXION ERRONEA...
} else {

    if (isset($_POST['submit']) && !empty($_POST['ID'])) { // CONEXION EXITOSA...

        // OBTENCION DE DATOS DEL FORMULARIO...

        $id = $_POST['ID'];
        $nom = $_POST['Nombre'];
        $cat = $_POST['Cat'];
        $desc = $_POST['Desc'];
        $exist = $_POST['Exist'];
        $precio = $_POST['Precio'];
        $img = addslashes(file_get_contents($_FILES['IMG']['tmp_name']));
        $codigo = $_POST['Cod'];

        // SENTENCIA PARA INSERTAR DATOS POR CADENA -MYSQL- ...

        $sql = "INSERT INTO productos (IDProducto, Nombre, Categoria, Descripcion, Existencia, Precio, Imagen, CodigoProducto)               VALUES('$id','$nom','$cat','$desc','$exist','$precio','$img','$codigo')";

        // SE APLICA LA SENTENCIA EN LA CONEXION ACTUAL...

        $conexion->query($sql);

        // CHECAMOS QUE SE INGRESO EL REGISTRO...

        if ($conexion->affected_rows >= 1) {
            echo '<script> alert("registro insertado") </script>';
        }

        // SENTENCIA PARA CONSULTAR DATOS EN TABLA...

        $sql = 'select * from productos';
        $resultado = $conexion->query($sql); // SE APLICA EN RESULTADOS...

        // SI HAY REGISTROS AL HACER CONSULTA...

        if ($resultado->num_rows) {

            while ($fila = $resultado->fetch_assoc()) { // SE RECORREN LOS DATOS DE LA TABLA...

                echo '</tr>';
            }

            echo '</table">';
            echo '</div>';

        } else {

            echo "no hay datos";
        }

    }


}
?>

<!-- FRONT DEL FORMULARIO ------------------------------------------------------------------------------------------------------->
<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo.css">
    <link rel="stylesheet" href="../css/Style-AltaProd.css">
    <script src="https://kit.fontawesome.com/3d7b0db529.js" crossorigin="anonymous"></script>
    <title>Alta productos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>



<body>

    <!-- FORMULARIO PARA DATOS ------------------------------------------------------------------------------------------------------>
    <div class="container">

        <div class="row">

            <div class="col-4">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
                    enctype="multipart/form-data" class="animate__animated animate__backInDown">
                    <div class="inset">
                        <h1 class="titulo"> - REGISTRO DE PRODUCTOS - </h1>

                        <div class="form-group">
                            <label for="ID"> ID del Producto: </label>
                            <input type="number" name="ID" class="form-control" id="ID" placeholder="" maxlength="5">
                        </div>

                        <div class="form-group">
                            <label for="Nombre"> Nombre del Producto: </label>
                            <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="Cat"> Categoria: </label>
                            <input type="text" id="Cat" name="Cat" class="form-control" placeholder=" ">
                        </div>

                        <div class="form-group">
                            <label for="Desc"> Descripcion: </label>
                            <input name="Desc" type="text" class="form-control" id="Desc" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="Exist"> Existencia: </label>
                            <input name="Exist" type="number" class="form-control" id="Exist" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="Precio"> Precio: </label>
                            <input name="Precio" type="number" class="form-control" id="Precio" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="IMG"> Imagen: </label>
                            <input type="file" name="IMG" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="Cod"> Codigo del Producto: </label>
                            <input name="Cod" type="text" class="form-control" placeholder="">
                        </div>

                        <button class="btn bttn btn-success" type="submit" name="submit"> ENVIAR DATOS </button>

                        <br><br>
                        <!-- BOTONES DE ACCESO ---------------------------------------------------------------------------------------------------------->

                        <button class="bttn"><a class="bttn" href="BajaProd.php">Eliminar Datos</a></button>
                        <button class="bttn"><a class="bttn" href="ModiProd.php">Modificar Datos</a></button>
                    </div>

                </form>

            </div> <!-- fin col -->

        </div> <!-- fin row -->

    </div> <!-- fin container -->

    <?php
    include "footer.php";
    ?>

</body>

</html>