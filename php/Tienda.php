<?php
// session_start();
$conn = new mysqli("localhost", "root", "", "productos");
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
    <title>Acerca De</title>
</head>

<body>
    <div class="container">
        <div class="mensaje"></div>
        <div class="row">
            <?php
            $stmt = $conn->prepare("SELECT * FROM productos");
            $stmt->execute();
            $resultado = $stmt->get_result();
            while ($fila = $resultado->fetch_assoc()):
            ?>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                <div class="borde1">
                    <div class="borde2">
                        <div class="imagen">
                            <img src="data:images/jpg;base64,<?php echo base64_encode($fila['Imagen']); ?>">
                        </div>
                         <div class="informacion">
                            <h4>
                                <?= $fila['Nombre'] ?>
                            </h4>
                            <h5">
                                <i class="signo pesos"> </i>&nbsp;&nbsp;<?= number_format($fila['Precio'], 2) ?>
                                    /$
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
                var Imagen = $form.find(".Imagen").val();
                var Codigo_Producto = $form.find(".Codigo_Producto").val();

                var cant = $form.find(".cant").val();
                $.ajax({
                    url: 'accion.php',
                    method: 'post',
                    data: {
                        IDProducto:IDProducto,
                        Nombre:Nombre,
                        Precio, Precio,
                        cant: cant,
                        Imagen:Imagen,
                        Codigo_Producto:Codigo_Producto
                    },
                    success: function(response)
                    {
                        $("#mensaje").html(response);
                        window.scrollTo(0,0);
                        CargarItemNumero();
                    }
                });
                });

                CargarItemNumero();

                function CargarItemNumero()
                {
                    $.ajax({
                        url: 'accion.php',
                        method: 'get',
                        data: {
                            cartItem: "cart_item"
                        },
                        success: function(respoonse){
                            $("#cart-item").html(respoonse);
                        }
                    })
                }
            });
    </script>
</body>