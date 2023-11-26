<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $id = $_POST["id"];
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

    // Construir la consulta SQL para modificar el empleado en la base de datos
    $sql = "UPDATE empleados SET ";

    if (!empty($nombre)) {
        $sql .= "nombre_empleado='$nombre', ";
    }

    if (!empty($puesto)) {
        $sql .= "puesto='$puesto', ";
    }

    if (!empty($direccion)) {
        $sql .= "direccion='$direccion', ";
    }

    if (!empty($telefono)) {
        $sql .= "telefono='$telefono', ";
    }

    // Eliminar la coma al final si al menos un campo no está vacío
    if ($sql !== "UPDATE empleados SET ") {
        $sql = rtrim($sql, ", ");
        $sql .= " WHERE id=$id";

        // Ejecutar la consulta SQL
        if ($conn->query($sql) === TRUE) {
            header('Location: ./');
        } else {
            echo "Error al modificar empleado: " . $conn->error;
        }
    } else {
        echo "No se realizaron cambios en la información del empleado";
    }

    // Cerrar la conexión
    $conn->close();
}
?>
