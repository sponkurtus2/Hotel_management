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
	<div class="grid">
	<article>
	<h1 style="text-align: center;">Restaurante</h1>
	<h3 style="text-align: center;">Agregar orden</h3>
	<form action="agregarOrden.php" method="POST">
                <input type="text" name="nombre_cliente" placeholder="Nombre del cliente" required>
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" required>
                <input type="number" name="platillos_pedidos" placeholder="Platillos pedidos" required>
                <input type="number" name="costo_total" placeholder="Costo total" required>
                
                <button type="submit">Agregar</button>
                <button type="button" onclick="window.location.href='../index.php'">Volver</button>

    </form>
	</article>
	
	<div>
	<article>
	<h1 style="text-align: center;">Lista de pedidos</h1>
	<!-- Aqui abajo sera la logica para mostrar los pedidos -->
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

                // Obtener la lista de pedidos desde la base de datos
                $sql = "SELECT * FROM restaurante";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Mostrar los datos en la lista
                    echo "<ul>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>";
                        echo "<strong>Cliente:</strong> " . $row["nombre_cliente"] . "<br>";
                        echo "<strong>Fecha:</strong> " . $row["fecha"] . "<br>";
                        echo "<strong>Platillos Pedidos:</strong> " . $row["platillos_pedidos"] . "<br>";
                        echo "<strong>Costo Total:</strong> $" . $row["costo_total"] . "<br>";
                        echo "</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "No hay pedidos registrados";
                }

                // Cerrar la conexión
                $conn->close();
                ?>
	</article>
	</div>

	</div>
	</div>
</body>
</html>