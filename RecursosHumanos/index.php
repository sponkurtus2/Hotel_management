<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD Hotel</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
	<style>
  [data-theme="dark"] {
  --primary: #5e35b1;
  --primary-hover: #673ab7;
  --primary-focus: rgba(94, 53, 177, 0.25);
  --primary-inverse: #FFF;
	}	
	</style>
</head>
<body>
	<div class="container">
	<article>
	<h1 style="text-align: center;">Recursos humanos</h1>
	<h2 style="text-align: center;">Lista de empleados</h2>
    
    <!-- Ver empleados -->
    
    <table border="1" style="width:100%">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Puesto</th>
        <th>Dirección</th>
        <th>Teléfono</th>
    </tr>

    <?php
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

    // Obtener la lista de empleados desde la base de datos
    $sql = "SELECT * FROM empleados";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar los datos en la tabla
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nombre_empleado"] . "</td>";
            echo "<td>" . $row["puesto"] . "</td>";
            echo "<td>" . $row["direccion"] . "</td>";
            echo "<td>" . $row["telefono"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No hay empleados registrados</td></tr>";
    }

    // Cerrar la conexión
    $conn->close();
    ?>
    </table>    

    <!-- Ver empleados -->
    
    <div class="grid">
		<div>
		<a href="AgregarEmpleado.php"><button>Agregar empleado</button></a>
		</div>
		<div>
			<a href="EliminarEmpleado.php"><button>Eliminar empleado</button></a>
		</div>
		<div>
		<a href="ModificarEmpleado.php"><button>Modificar empleado</button></a>
		</div>
        <div>
        <button type="button" onclick="window.location.href='../index.php'">Volver</button>
        </div>
	</div>
    </article>
</body>
</html>