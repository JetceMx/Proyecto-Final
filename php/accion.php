<?php
    $conn = new mysqli("localhost", "root", "", "carrito");
    if($conn->connect_error){
        die("La conexion se petateo".$conn->connect_error);
}

    if(isset($_POST['pid']))
    {
        $pid = $_POST['pid'];
        $pnombre = $_POST['pnombre'];
        $pprecio = $_POST['pprecio'];
        $pimagen = $_POST['pimagen'];
        $pcode = $_POST['pcode'];
        $cant = 1;


        $smtm = $conn->prepare("SELECT producto_codigo FROM carro WHERE producto_codigo=?");
        $smtm->bind_param("s", $pcode );
        $smtm->execute();
        $res = $stmt->get_result();
        $r = $res->fetch_assoc();
        $code = $r['producto_codigo'];

        //validar si existe en el carro

        if(!$code)
        {
            $query = $conn->prepare("INSERT INTO carro (
                producto_nombre, producto_precio, producto_imagen, cant, precio_total, producto_codigo)
                VALUES (?,?,?,?,?,?)");
                $query->bind_param("sssiss", $pnombre, $pprecio, $pimagen, $cant, $pprecio, $pcode);
                $query->execute();

                echo 'PRODUCTO AÑADIDO AL CARRITO';
        } else
        {
            echo 'El product ya esta en el carrito';
        }

    }
?>