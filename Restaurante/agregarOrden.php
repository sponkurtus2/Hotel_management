<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_management";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recuperar datos del formulario
$nombre_cliente = $_POST['nombre_cliente'];
$fecha = $_POST['fecha'];
$platillos_pedidos = $_POST['platillos_pedidos'];
$costo_total = $_POST['costo_total'];

$sql = "INSERT INTO restaurante (nombre_cliente, fecha, platillos_pedidos, costo_total)
 VALUES ('$nombre_cliente', '$fecha', '$platillos_pedidos', '$costo_total')";

if ($conn->query($sql) === TRUE) {
    header('Location: ./');
} else {
    echo "Error al agregar orden: " . $conn->error;
}


// Cerrar la conexión
$conn->close();
?>