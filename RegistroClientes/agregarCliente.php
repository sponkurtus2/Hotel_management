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
$numero_personas = $_POST['numero_personas'];
$fecha_entrada = $_POST['fecha_entrada'];
$fecha_salida = $_POST['fecha_salida'];
$tipo_habitacion = $_POST['tipo_habitacion'];
$email_cliente = $_POST['email_cliente'];

// Calcular el costo total según el tipo de habitación
$costo_habitacion = ($tipo_habitacion == 'Sencilla') ? 550 : 750;
$costo_total = $costo_habitacion * $numero_personas;

$sql = "INSERT INTO clientes (nombre_cliente, numero_personas, fecha_entrada, fecha_salida, tipo_habitacion, costo_total, email_cliente)
 VALUES ('$nombre_cliente', $numero_personas, '$fecha_entrada', '$fecha_salida', '$tipo_habitacion', $costo_total, '$email_cliente')";

if ($conn->query($sql) === TRUE) {
    // Enviar correo electrónico al cliente
$to = $email_cliente;
$subject = "Confirmación de reserva en el hotel";
$message = "Hola $nombre_cliente,\n\n";
$message .= "Tu reserva ha sido confirmada.\n";
$message .= "Detalles de la reserva:\n";
$message .= "Fecha de entrada: $fecha_entrada\n";
$message .= "Fecha de salida: $fecha_salida\n";
$message .= "Tipo de habitación: $tipo_habitacion\n";
$message .= "Número de personas: $numero_personas\n";
$message .= "Costo total: $costo_total\n\n";
$message .= "¡Gracias por elegir nuestro hotel!\n";

$headers = "From: sponkurtus3@gmail.com";

// Intentar enviar el correo
if (mail($to, $subject, $message, $headers)) {
    header('Location: ./');
} else {
    header('Location: ./');
}
} else {
    echo "Error al registrar al cliente: " . $conn->error;
}



// Cerrar la conexión
$conn->close();
?>