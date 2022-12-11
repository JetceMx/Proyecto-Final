
<?php
$conn = new mysqli("localhost", "root", "", "productos");
                    if($conn->connect_error){
                        die("La conexion se petateo".$conn->connect_error);
                    }
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cart</title>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>
    <?php
    include 'header.php'
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div style="display:<?php if (isset($_SESSION['showAlert'])) {
  echo $_SESSION['showAlert'];
} else {
  echo 'none';
} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><?php if (isset($_SESSION['message'])) {
  echo $_SESSION['message'];
} unset($_SESSION['showAlert']); ?></strong>
                </div>
                <div class="table-responsive mt-2">
                    <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <td colspan="7">
                                    <h4 class="text-center text-info m-0">Productos en tu carrito!</h4>
                                </td>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>
                                    <a href="accion.php?clear=all" class="badge-danger badge p-1"
                                        onclick="return confirm('Seguro que quieres eliminar todo?');"><i
                                            class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        
                }
                <?php
                $stmt = $conn->prepare('SELECT * FROM carro');
                $stmt->execute();
                $result = $stmt->get_result();
                $total_final = 0;  //grand_total
                while ($fila = $result->fetch_assoc()):
              ?>
                            <tr>
                                <td><?= $fila['IDProducto'] ?></td>
                                <input type="hidden" class="IDProducto" value="<?= $fila['IDProducto'] ?>">
                                <td><img src="<?= $fila['Imagen'] ?>" width="50"></td>
                                <td><?= $fila['Nombre'] ?></td>
                                <td>
                                    <i
                                        class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($fila['Precio'],2); ?>
                                </td>
                                <input type="hidden" class="Precio" value="<?= $fila['Precio'] ?>">
                                <td>
                                    <input type="number" class="form-control itemQty" value="<?= $fila['cant'] ?>"
                                        style="width:75px;">
                                </td>
                                <td><i
                                        class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($fila['precio_total'],2); ?>
                                </td>
                                <td>
                                    <a href="accion.php?remove=<?= $fila['IDProducto'] ?>" class="text-danger lead"
                                        onclick="return confirm('Seguro que quieres eliminar este producto');"><i
                                            class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <?php $total_final += $fila['precio_total']; ?>
                            <?php endwhile; ?>
                            <tr>
                                <td colspan="3">
                                    <a href="Tienda.php" class="btn btn-success"><i
                                            class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continuar compra</a>
                                </td>
                                <td colspan="2"><b>Total a pagar</b></td>
                                <td><b><i
                                            class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($total_final,2); ?></b>
                                </td>
                                <td>
                                    <a href="checkout.php" <?= ($total_final >= 0) ? '' : 'disabled'; ?>"><i
                                            class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php
  include 'footer.php'
  ?>

    <script type="text/javascript">
    $(document).ready(function() {
                $(".addItemBtn").click(function(e) {
                    e.preventDefault();
                    var $form = $(this).closest(".form-submit");
                    var IDProducto = $form.find(".IDProducto").val();
                    var Nombre = $form.find(".Nombre").val();
                    var Precio = $form.find("Precio").val();
                    var Imagen = $form.find(".Imagen").val();
                    var Codigo_Producto = $form.find(".Codigo_Producto").val();

                    var cant = $form.find(".cant").val();

                    $(".itemQty").on('change', function() {
                        var $el = $(this).closest('tr');

                        var pid = $el.find(".IDProductp").val();
                        var pprice = $el.find(".Pecio").val();
                        var qty = $el.find(".itemQty").val();
                        location.reload(true);
                        $.ajax({
                            url: 'accion.php',
                            method: 'post',
                            cache: false,
                            data: {
                                cant: cant,
                                IDProducto: IDProducto,
                                Precio: Precio
                            },
                            success: function(response) {
                                console.log(response);
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
                            success: function(respoonse) {
                                $("#cart-item").html(respoonse);
                            }
                        })
                    }
                });
            });
            
    </script>
</body>

</html>