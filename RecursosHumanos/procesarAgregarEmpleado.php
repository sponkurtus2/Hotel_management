<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $nombre = $_POST["nombre"];
    $puesto = $_POST["puesto"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];

    // Conectar a la base de datos (ajusta estos valores según tu configuración)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel_management";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Insertar nuevo empleado en la base de datos
    $sql = "INSERT INTO empleados (nombre_empleado, puesto, direccion, telefono) VALUES ('$nombre', '$puesto', '$direccion', '$telefono')";

    if ($conn->query($sql) === TRUE) {
        echo "Empleado agregado exitosamente";
    } else {
        echo "Error al agregar empleado: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
