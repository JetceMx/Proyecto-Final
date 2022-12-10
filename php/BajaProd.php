<?php

// VARIABLES DE CONEXION...

$servidor = 'localhost:33065';
$cuenta = 'root';
$password = '';
$bd = 'productos';

$conexion = new mysqli($servidor, $cuenta, $password, $bd);

if ($conexion->connect_errno) {

    die('Error en la conexion');
} else {

    if (isset($_POST['submit'])) {

        $eliminar = $_POST['eliminar'];

        $sql = "DELETE FROM productos WHERE IDProducto = '$eliminar'";
        $conexion->query($sql);
        if ($conexion->affected_rows >= 1) {

            echo '<br> EL PRODUCTO FUE BORRADO EXITOSAMENTE <br>';
        }
    }

    $sql = 'select * from productos';
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows) {

?>
<div>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <legend> - ELIMINAR CUENTAS - </legend>

        <br>

        <select class="browser-default custom-select" name="eliminar">

            <?php

        while ($fila = $resultado->fetch_assoc()) {

            echo '<option value="' . $fila["IDProducto"] . '">' . $fila["Nombre"] . '</option>';

        }
            ?>

        </select>


        <br><br>

        <button type="submit" value="submit" name="submit"> Eliminar Productos </button>

        <br><br>

        <button><a href="ModiProd.php">Modificar Datos</a></button>
        <button><a href="AltaProd.php">Ingresar Datos</a></button>

    </form>
</div>

<?php

    } else {

        echo "NO HAY DATOS";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> ELIMINAR PRODUCTOS </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        div {

            width: 20%;
        }

        body {
            margin: 50px;
        }
    </style>
</head>

<body>
    <?php

    $sql = 'select * from productos'; //HACEMOS CADENA CON LA SENTENCIA DE MYSQL...
    $resultado = $conexion->query($sql); // SENTENCIA...
    
    // CREACION DE TABLA CON ECHO Y HTML ---------------------------------------------------------------------------------------------
    
    // SI HAY UN VALOR O PACIENTE EN EL RENGLON...
    
    if ($resultado->num_rows) {

        echo '
                </head>
                
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

                </head>';

        echo '<div>';
        echo '<table class="table table-hover" style="width:100%; font-style: italic">';

        echo '<tr>';

        echo '<th style="text-align: center;"> ID PRODUCTO   </th>';
        echo '<th> NOMBRE          </th>';
        echo '<th> CATEGORIA       </th>';
        echo '<th> DESCRIPCION     </th>';
        echo '<th> EXISTENCIA      </th>';
        echo '<th> PRECIO          </th>';
        echo '<th> IMAGEN          </th>';

        echo '</tr>';

        // IMPRIME LOS VALORES QUE TIENE EL ARREGLO DE FILA...
    
        while ($fila = $resultado->fetch_assoc()) {

    ?>

    <tr style="text-align: center;">

        <td>
            <?php echo $fila['IDProducto']; ?>
        </td>
        <td>
            <?php echo $fila['Nombre']; ?>
        </td>
        <td>
            <?php echo $fila['Categoria']; ?>
        </td>
        <td>
            <?php echo $fila['Descripcion']; ?>
        </td>
        <td>
            <?php echo $fila['Existencia']; ?>
        </td>
        <td>
            <?php echo $fila['Precio']; ?>
        </td>
        <td> <img src="data:image/jpg;base64,<?php echo base64_encode($fila['Imagen']); ?>" height="75" width="75"></td>

        <?php

            echo '</tr>';

        }

        echo '</table">';

        echo '</div>';

    } else {

        echo "no hay datos";
    }

    echo '<button><a href="AltaProd.php">Ingresar Datos</a></button>';

    echo '<br><br>';

                ?>

        <select class="custom-select">

            <?php

        $salida = '<table>';

        while ($fila = $resultado->fetch_assoc()) { //recorremos los registros obtenidos de la tabla
        
            echo '<option value="' . $fila["IDProducto"] . '">' . $fila["Nombre"] . '</option>';
            //proceso de concatenacion de datos
        }
        ?>
        </select>
</body>

</html>