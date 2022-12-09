<?php

$servidor = 'localhost';
$cuenta = 'root';
$password = 'Sandia2016.!';
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
        $img = $_POST['Img'];

        // SENTENCIA PARA INSERTAR DATOS POR CADENA -MYSQL- ...

        $sql = "INSERT INTO productos (IDProducto, Nombre, Categoria, Descripcion, Existencia, Precio, Imagen) VALUES('$id','$nom','$cat','$desc','$exist','$precio','images/Productos/$img')";

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

            echo '<div style="margin-left: 20px;">';
            echo '<table class="table table-hover" style="width:50%;">';

            echo '<tr style="text-align: center;">';

            echo '<th> ID PRODUCTO </th>';
            echo '<th> NOMBRE </th>';
            echo '<th> CATEGORIA </th>';
            echo '<th> DESCRIPCION </th>';
            echo '<th> EXISTENCIA </th>';
            echo '<th> PRECIO </th>';
            echo '<th> IMAGEN </th>';

            echo '</tr>';

            while ($fila = $resultado->fetch_assoc()) { // SE RECORREN LOS DATOS DE LA TABLA...

                echo '<tr style="text-align: center;>';

                echo '<td>' . $fila['IDProducto'] . '</td>';
                echo '<td>' . $fila['Nombre'] . '</td>';
                echo '<td>' . $fila['Categoria'] . '</td>';
                echo '<td>' . $fila['Descripcion'] . '</td>';
                echo '<td>' . $fila['Existencia'] . '</td>';
                echo '<td>' . $fila['Precio'] . '</td>';
                echo '<td>' . $fila['Imagen'] . '</td>';

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

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title> REGISTRO DE PRODUCTOS </title>

    <style>
        td,
        th {
            padding: 10px;

        }
    </style>

</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-4">

                <!-- FORMULARIO PARA DATOS ------------------------------------------------------------------------------------------------------>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method='post'
                    enctype="multipart/form-data">

                    <h2> - REGISTRO DE PRODUCTOS - </h2>

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
                        <label for="Desc"> Imagen(URL): </label>
                        <input name="Img" type="text" class="form-control" id="Img" placeholder="">
                    </div>

                    <button class="btn btn-success" type="submit" name="submit"> ENVIAR DATOS </button>

                    <!-- FORMULARIO PARA IMAGEN ----------------------------------------------------------------------------------------------------->

                    <form action="LogicaImagen.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="Img"> Imagen: </label>
                            <input type="file" name="fileTest" id="fileTest" class="form-control">
                        </div>

                        <button class="btn btn-success" type="submit" name="submit"> ENVIAR IMAGEN </button>

                    </form>

                    <br><br>

                    <!-- BOTONES DE ACCESO ---------------------------------------------------------------------------------------------------------->

                    <button><a href="BajaProd.php">Eliminar Datos</a></button>
                    <button><a href="ModiProd.php">Modificar Datos</a></button>
                    <button><a href="CompraP.php">Comprar Producto</a></button>

                </form>

            </div> <!-- fin col -->

        </div> <!-- fin row -->

    </div> <!-- fin container -->

    <br><br>

</body>

</html>