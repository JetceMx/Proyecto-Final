<?php
$conn = new mysqli("localhost", "root", "", "productos");
if ($conn->connect_error) {
    die("La conexion se petateo" . $conn->connect_error);
}

	//Añadir productos
	if (isset($_POST['IDProducto'])) {
	  $IDProducto = $_POST['IDProducto'];
	  $Nombre = $_POST['Nombre'];
	  $Precio = $_POST['Precio'];
	  $Imagen = $_POST['Imagen'];
	  $Codigo_Producto = $_POST['Codigo_Producto'];
	  $cant = $_POST['cant'];
	  $precioTotal = $Precio * $cant;

	  $stmt = $conn->prepare('SELECT producto_code FROM carro WHERE producto_code=?');
	  $stmt->bind_param('s',$producto_code);
	  $stmt->execute();
	  $res = $stmt->get_result();
	  $r = $res->fetch_assoc();
	  $code = $r['producto_code'] ?? '';

	  if (!$code) {
	    $query = $conn->prepare('INSERT INTO carro (Nombre,Precio,Imagen,cant,precio_total,producto_code) VALUES (?,?,?,?,?,?)');
	    $query->bind_param('isssiss',$Nombre,$Precio,$Imagen,$cant,$precio_total,$producto_code);
	    $query->execute();

	    echo '<div class="alert alert-success alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Producto añadido</strong>
						</div>';
	  } else {
	    echo '<div class="alert alert-danger alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>El producto ya está en el carrito</strong>
						</div>';
	  }
	}


	if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {
	  $stmt = $conn->prepare('SELECT * FROM carro');
	  $stmt->execute();
	  $stmt->store_result();
	  $filas = $stmt->num_filas;

	  echo $filas;
	}

	// Remove single items from cart
	if (isset($_GET['remove'])) {
	  $IDProducto = $_GET['remove'];

	  $stmt = $conn->prepare('DELETE FROM carro WHERE id=?');
	  $stmt->bind_param('i',$id);
	  $stmt->execute();

	  $_SESSION['showAlert'] = 'block';
	  $_SESSION['message'] = 'Se elimino correctamente';
	  header('location:carro.php');
	}

	// Remove all items at once from cart
	if (isset($_GET['clear'])) {
	  $stmt = $conn->prepare('DELETE FROM carro');
	  $stmt->execute();
	  $_SESSION['showAlert'] = 'block';
	  $_SESSION['message'] = 'Se eliminaron todos los articulos';
	  header('location:carro.php');
	}

	// Set total price of the product in the cart table
	if (isset($_POST['cant'])) {
	  $cant = $_POST['cant'];
	  $IDProducto = $_POST['IDProducto'];
	  $Precio = $_POST['Precio'];

	  $precioTotal = $cant * $Precio;

	  $stmt = $conn->prepare('UPDATE carro SET cant=?, precio_total=? WHERE IDProducto=?');
	  $stmt->bind_param('isi',$cant,$precioTotal,$IDProducto);
	  $stmt->execute();
	}

	// Checkout and save customer info in the orders table
	if (isset($_POST['action']) && isset($_POST['action']) == 'order') {
	  $nombre = $_POST['nombre'];
	  $email = $_POST['email'];
	  $num_celular = $_POST['num_celular'];
	  $productos = $_POST['productos'];
	  $cant_pago = $_POST['cant_pago'];
	  $direccion = $_POST['direccion'];
	  $mpago = $_POST['mpago'];

	  $data = '';

	  $stmt = $conn->prepare('INSERT INTO orden (nombre,email,num_celular,direccion,mpago,productos,cant_pago)VALUES(?,?,?,?,?,?,?)');
	  $stmt->bind_param('sssssss',$nombre,$email,$num_celular,$direccion,$mpago,$productos,$cant_pago);
	  $stmt->execute();
	  $stmt2 = $conn->prepare('DELETE FROM carro');
	  $stmt2->execute();
	  $data .= '<div class="text-center">
								<h1 class="display-4 mt-2 text-danger">Gracias</h1>
								<h2 class="text-success">Pagaste correctamente</h2>
								<h4 class="bg-danger text-light rounded p-2">Items comprados: ' . $products . '</h4>
								<h4>Nombre: ' . $name . '</h4>
								<h4>Tu email : ' . $email . '</h4>
								<h4>Tu numero de celular: ' . $num_celular . '</h4>
								<h4>Total pagado: ' . number_format($cant_pago,2) . '</h4>
								<h4>Metodo de pago : ' . $mpago . '</h4>
						  </div>';
	  echo $data;
	}
?>