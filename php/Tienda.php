<?php
    session_start();
    $conn = new mysqli("localhost","root","","carrito");
    if($conn->connect_error){
        die("La conexion se petateo".$conn->connect_error);
}
?>

<body>
    <div class="container">
        <div class="mensaje"></div>
        <div class="row">
            <?php
            $stmt = $conn->prepare("SELECT * FROM productos");
            $stmt->execute();
            $resultado = $stmt->get_result();
            while($row = $resultado->fetch_assoc()):
            ?>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                <div class="borde1">
                    <div class="borde2">
                        <img src="<?= $row['producto_imagen'] ?>" class="tarjeta_imagen" height="250">
                        <div class="informacion">
                            <h4><?= $row['producto_nombre'] ?></h4>
                            <h5">
                                <i class="signo pesos"> </i>&nbsp;&nbsp;<?= number_format($row['producto_precio'],2) ?>/$
                            </h5>
                        </div>
                        <div class="pieimg">
                            <form action="" class="form-submit">
                                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                                <input type="hidden" class="pnombre" value="<?= $row['producto_nombre'] ?>">
                                <input type="hidden" class="pprecio" value="<?= $row['producto_precio'] ?>">
                                <input type="hidden" class="pimagen" value="<?= $row['producto_imagen'] ?>">
                                <input type="hidden" class="pcode" value="<?= $row['producto_codigo'] ?>">
                                <button class="carro"> <i></i> Agregar a carrito</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile ?>
        </div>
    </div>
    <!-- FIN DE LA MUESRA DE PRODUCTOS -->

    <script type="text/javascript">
        $(document).ready(function()
        {
            $(".addItemBtn").click(function(e)
            {
                e.preventDefault();
                var $form = $(this).closest(".form-submit");
                var pid = $form.find("pid").val();
                var pnombre = $form.find("pnombre").val();
                var pprecio = $form.find("pprecio").val();
                var pimagen = $form.find("pimagen").val();
                var pcode = $form.find("pcode").val();

                $.ajax({
                    url: 'accion.php',
                    method: 'post',
                    data: {
                        pid:pid, pnombre:pnombre, pprecio:pprecio,
                        pimagen:pimagen, pcode:pcode},
                    success:function(response){
                        $("mensaje").html(response);
                    }
                    });
                })
            });
    </script>
</body>