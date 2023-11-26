<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar el ID del empleado a eliminar
    $id = $_POST["id"];

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

    // Eliminar el empleado de la base de datos
    $sql = "DELETE FROM empleados WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Empleado eliminado exitosamente";
    } else {
        echo "Error al eliminar empleado: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
