<?php

    // VARIABLES DE CONEXION...

    $servidor = 'localhost:33065';
    $cuenta='root';
    $password='';
    $bd='productos';

    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

    if ($conexion->connect_errno){
        
         die('Error en la conexion');
    }

    else{
        
        if(isset($_POST['submit'])){
            
            $eliminar = $_POST['eliminar'];
            
            $sql = "DELETE FROM productos WHERE IDProducto = '$eliminar'";
            $conexion -> query($sql);
            if($conexion -> affected_rows >= 1){
                
                echo '<br> EL PRODUCTO FUE BORRADO EXITOSAMENTE <br>';
            }
        }
        
        $sql = 'select * from productos';
        $resultado = $conexion -> query($sql);
        
        if($resultado -> num_rows){
        
        ?>
<div>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    
        <legend> - ELIMINAR CUENTAS - </legend>
        
            <br>
            
            <select class="browser-default custom-select" name="eliminar">
                
                 <?php 
                
                    while($fila = $resultado -> fetch_assoc()){
                        
                        echo '<option value="'.$fila["IDProducto"].'">'.$fila["Nombre"].'</option>';
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
    
        }
        
        else{
            
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
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     
    <style>
    div{
   
   width:20%;
 }
 body{
     margin:50px;
 }
    </style>
</head>
<body>
</body>
</html>