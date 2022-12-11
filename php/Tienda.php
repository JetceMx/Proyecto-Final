<?php
// session_start();
$conn = new mysqli("localhost", "root", "Sandia2016.!", "productos");
if ($conn->connect_error) {
    die("La conexion se petateo" . $conn->connect_error);
}
?>

<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Style-Global.css">
    <link rel="stylesheet" href="../css/Style-Tienda.css">
    <title>Tienda</title>
</head>

<body>
    <div class="cupon recuadro-4">
        <div class="r-4_hijo ">
            <br>
            <h1 class="text">Cupon Nintendo Online</h1> <br><br>
            <img src="https://i.ytimg.com/vi/j9p-RJU6VWo/maxresdefault.jpg" alt="" width="600px" height="250px">
        </div>
    </div>
    <div class="container">
        <div class="categorias">
            <div class="titulo">
                <h1>Categorias</h1>
            </div>
            <br>
            <div class="subtitulos">
                <div class="cat1">
                    <input type="radio" name="filtro" id="todo" checked>
                    <label for="todo">Todo</label>
                </div>
                <div class="cat1">
                    <input type="radio" name="filtro" id="consolas1">
                    <label for="consolas1">Consolas</label>
                </div>
                <div class="cat1">
                    <input type="radio" name="filtro" id="controles1">
                    <label for="controles1">Controles</label>
                </div>
            </div>
        </div>

        <div class="mensaje"></div>
        <div class="row">
            <?php
            $stmt = $conn->prepare("SELECT * FROM productos");
            $stmt->execute();
            $resultado = $stmt->get_result();
            while ($fila = $resultado->fetch_assoc()):
            ?>
            <?php
                $categoria = $fila['Categoria']
                ?>
            <div class="productos">
                <div class="borde1 <?= $categoria ?>">
                    <div class="borde2">
                        <div class="imagen">
                            <img src="data:images/jpg;base64,<?php echo base64_encode($fila['Imagen']); ?>"
                                style="width: 220px; height:150px;">
                        </div>
                        <div class="informacion">
                            <h4>
                                <?= $fila['Nombre'] ?>
                                    <br><br>
                            </h4>
                            <h5>
                                <?= $fila['Descripcion'] ?>
                                    <br><br>
                                    Disponibles: <?= $fila['Existencia'] ?>
                                        <br><br>
                                        <?= $fila['Categoria'] ?>
                            </h5>
                        </div>
                        <div class="pieimg">
                            <form action="" class="form-submit">
                                <input type="hidden" class="IDProducto" value="<?= $fila['IDProducto'] ?>">
                                <input type="hidden" class="Nombre" value="<?= $fila['Nombre'] ?>">
                                <input type="hidden" class="Precio" value="<?= $fila['Precio'] ?>">
                                <button class="addItemBtn"> <i></i> Agregar a carrito</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile ?>
        </div>
    </div>
    <!-- FIN DE LA MUESRA DE PRODUCTOS -->

    <?php
    include "footer.php";
    ?>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".addItemBtn").click(function (e) {
                e.preventDefault();
                var $form = $(this).closest(".form-submit");
                var IDProducto = $form.find(".IDProducto").val();
                var Nombre = $form.find(".Nombre").val();
                var Precio = $form.find("Precio").val();
                var cant = $form.find(".cant").val();
                $.ajax({
                    url: 'accion.php',
                    method: 'post',
                    data: {
                        IDProducto: IDProducto,
                        Nombre: Nombre,
                        Precio, Precio,
                        cant: cant,
                        Imagen: Imagen,
                        Codigo_Producto: Codigo_Producto
                    },
                    success: function (response) {
                        $("#mensaje").html(response);
                        window.scrollTo(0, 0);
                        CargarItemNumero();
                    }
                });
            });

            CargarItemNumero();

            function CargarItemNumero() {
                $.ajax({
                    url: 'accion.php',
                    method: 'get',
                    data: {
                        cartItem: "cart_item"
                    },
                    success: function (respoonse) {
                        $("#cart-item").html(respoonse);
                    }
                })
            }
        });
    </script>
</body>

</html>