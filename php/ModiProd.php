<?php

session_start();

$servidor = 'localhost';
$cuenta = 'root';
$password = 'Sandia2016.!';
$bd = 'productos';

// VARIABLES DE SESIONES...

$_SESSION['IDProducto'] = '';
$_SESSION['Nombre'] = '';
$_SESSION['Cat'] = '';
$_SESSION['Desc'] = '';
$_SESSION['Exist'] = '';
$_SESSION['Precio'] = '';
$_SESSION['Img'] = '';

$conexion = new mysqli($servidor, $cuenta, $password, $bd);

if ($conexion->connect_errno) {

    die('Error en la conexion');
}

if (isset($_POST["submit"])) {

    $Modificar = $_POST['Modificar'];
    $_SESSION["Modificar2"] = $Modificar;

    $sql2 = "select * from productos where IDProducto = '$Modificar'";

    $resultado = $conexion->query($sql2);
    while ($fila = $resultado->fetch_assoc()) {

        $_SESSION['IDProducto'] = $fila["IDProducto"];
        $_SESSION['Nombre'] = $fila["Nombre"];
        $_SESSION['Cat'] = $fila["Categoria"];
        $_SESSION['Desc'] = $fila["Descripcion"];
        $_SESSION['Exist'] = $fila["Existencia"];
        $_SESSION['Precio'] = $fila["Precio"];
        $_SESSION['Img'] = $fila["Imagen"];
    }
}

if (isset($_POST['MOD'])) {

    $uno = $_POST["IDProducto2"];
    $dos = $_POST["Nombre2"];
    $tres = $_POST["Cat2"];
    $cuatro = $_POST["Desc2"];
    $cinco = $_POST["Exist2"];
    $seis = $_POST["Precio2"];
    $siete = $_POST["Img2"];

    $Modificarl = $_SESSION["Modificar2"];

    $ne = "update productos set IDProducto='$uno', Nombre='$dos', Categoria='$tres', Descripcion='$cuatro', Existencia='$cinco', Precio='$seis', Imagen='$siete' WHERE IDProducto='$Modificarl'";
    $fin = $conexion->query($ne);
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Modificar Productos </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="Estilos2.css">

</head>

<body>

    <div class="contenedor1">
        <div class="contenedor2">
            <div class="izquierdaAlta">

                <?php
                //continuamos con la consulta de datos a la tabla usuarios
                //vemos datos en un tabla de html
                $sql = 'select * from productos'; //hacemos cadena con la sentencia mysql que consulta todo el contenido de la tabla
                $resultado = $conexion->query($sql); //aplicamos sentencia
                
                if ($resultado->num_rows) { //si la consulta genera registros
                ?>


                <div class="izqAlta">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method='post'>

                        <legend> Modificar Productos </legend>

                        <br>

                        <select class="custom-select" name='Modificar'>

                            <?php

                    $salida = '<table>';

                    while ($fila = $resultado->fetch_assoc()) { //recorremos los registros obtenidos de la tabla
                
                        echo '<option value="' . $fila["IDProducto"] . '">' . $fila["Nombre"] . '</option>';
                        //proceso de concatenacion de datos
                
                        $salida .= '<tr>';
                        $salida .= '<td>' . $fila['IDProducto'] . '</td>';
                        $salida .= '<td>' . $fila['Nombre'] . '</td>';
                        $salida .= '<td>' . $fila['Categoria'] . '</td>';
                        $salida .= '<td>' . $fila['Descripcion'] . '</td>';
                        $salida .= '<td>' . $fila['Existencia'] . '</td>';
                        $salida .= '<td>' . $fila['Precio'] . '</td>';
                        $salida .= '<td>' . $fila['Imagen'] . '</td>';
                        $salida .= '</tr>';

                    } //fin while   
                
                    $salida .= '</table>';

                            ?>
                        </select>

                        <br><br>

                        <button class="btn btn-success" type="submit" value="submit" name="submit"> Seleccionar
                        </button>

                        <br><br>

                        <button><a href="BajaProd.php">Eliminar Datos</a></button>
                        <button><a href="AltaProd.php">Ingresar Datos</a></button>
                        <button><a href="CompraP.php">Comprar Productos</a></button>

                    </form>
                </div>
                <?php

                } else {
                    echo "no hay datos";
                }

                ?>
            </div>

            <div class="izquierdaBaja">
                <?php echo $salida ?>
            </div>

        </div>
        <div class="derecha">

            <form class="estiloformulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method='post'>

                <ul class="wrapper">

                    <li class="form-row">
                        <label for="ID"> ID del Producto </label>
                        <input type="number" name="IDProducto2" id="ID" value="<?php echo $_SESSION["IDProducto"]; ?>">
                    </li>

                    <li class="form-row">
                        <label for="Nombre"> Nombre </label>
                        <input type="text" id="Nombre" name="Nombre2" value="<?php echo $_SESSION["Nombre"]; ?>">
                    </li>

                    <li class="form-row">
                        <label for="Categoria"> Categoria </label>
                        <input type="text" id="Categoria" name="Cat2" value="<?php echo $_SESSION["Cat"]; ?>">
                    </li>

                    <li class="form-row">
                        <label for="Descripcion"> Descripcion </label>
                        <input type="text" id="contra" name="Desc2" value="<?php echo $_SESSION['Desc']; ?>">
                    </li>

                    <li class="form-row">
                        <label for="Existencia"> Existencia </label>
                        <input type="text" id="contra" name="Exist2" value="<?php echo $_SESSION['Exist']; ?>">
                    </li>

                    <li class="form-row">
                        <label for="Precio"> Precio </label>
                        <input type="text" id="contra" name="Precio2" value="<?php echo $_SESSION['Precio']; ?>">
                    </li>

                    <li class="form-row">
                        <label for="Imagen"> Imagen </label>
                        <input type="text" id="contra" name="Img2" value="<?php echo $_SESSION['Img']; ?>">
                    </li>

                    <li class="form-row">
                        <button type="submit" name="MOD">Modificar</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>

</html>