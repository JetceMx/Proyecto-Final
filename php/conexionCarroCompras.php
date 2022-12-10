<?php
    $conn = new mysqli("localhost", "root", "", "carrito");
    if($conn->connect_error){
        die("La conexion se petateo".$conn->connect_error);
}

?>