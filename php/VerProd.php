<?php
    include "header.php";
?>    

    


<br>
   <center><h5 class="card-title">- TIENDA DE PRODUCTOS "GEImers" -</h5></center>

   <center> Para poder hacer modificaciones en los productos, es necesario editar los registros en PHPMyAdmin.</center>
   
   <br><br>
    
    <?php
// CODIGO PHP PARA OBTENCION DE DATOS EN LA BASE DE DATOS PHPMYADMIN -------------------------------------------------------------

    //VARIABLES...
     
    $servidor='localhost';
    $cuenta='root';
    $password='';
    $bd='productos';
   
    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

    // SI LA CONEXION FALLA...

    if ($conexion->connect_errno){
         die('Error en la conexion');
    }

    // SI LA CONEXION FUNCIONA...

    else{
        
        $sql = 'select * from productos';//HACEMOS CADENA CON LA SENTENCIA DE MYSQL...
        $resultado = $conexion -> query($sql); // SENTENCIA...
        
// CREACION DE TABLA CON ECHO Y HTML ---------------------------------------------------------------------------------------------
        
        // SI HAY UN VALOR O PACIENTE EN EL RENGLON...

        if ($resultado -> num_rows){
            
            echo '
                </head>
                
                <link rel="stylesheet" href="../css/Style-VerProd.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

                </head>';
                
            echo '<div>';
            echo '<table border="2" class="table table-hover" style="padding: auto; width:100%; font-style: italic;">';
              
            echo '<tr>';
            
                    echo '<th  style="text-align: center;"> ID PRODUCTO   </th>';
                    echo '<th> NOMBRE          </th>';
                    echo '<th> CATEGORIA       </th>';
                    echo '<th> DESCRIPCION     </th>';
                    echo '<th> EXISTENCIA      </th>';
                    echo '<th> PRECIO          </th>';
                    echo '<th> IMAGEN          </th>';
            
            echo '</tr>';
            
            // IMPRIME LOS VALORES QUE TIENE EL ARREGLO DE FILA...
            
            while( $fila = $resultado -> fetch_assoc()){

                
                ?>

                        <tr style="text-align: center; border:'2'">

                        <td> <?php echo $fila['IDProducto']; ?></td>
                        <td> <?php echo $fila['Nombre']; ?></td>
                        <td> <?php echo $fila['Categoria']; ?></td>
                        <td> <?php echo $fila['Descripcion']; ?></td>
                        <td> <?php echo $fila['Existencia']; ?></td>
                        <td> <?php echo $fila['Precio']; ?></td>
                        <td> <img src="data:image/jpg;base64,<?php echo base64_encode($fila['Imagen']); ?>" height="75" width="75"></td>

                        
 

                        <?php
                
                echo '</tr>';
                
            }   
            
            echo '</table">';
            
        echo '</div>';
        
        }
        
         else{
             
             echo "no hay datos";
         }
        
        echo '<center><button><a href="AltaProd.php">Ingresar Datos</a></button></center>';
        
        echo '<br><br>';
    }
?>

  

  