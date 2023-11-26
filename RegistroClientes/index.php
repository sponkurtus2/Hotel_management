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
            <h1 style="text-align: center;">Registro de clientes</h1>
            <form action="agregarCliente.php" method="POST">
                <input type="text" name="nombre_cliente" placeholder="Nombre del cliente" required>
                <input type="number" name="numero_personas" placeholder="Numero de personas" required>
                <label for="fecha_entrada">Fecha de entrada</label>
                <input type="date" name="fecha_entrada" required>
                <label for="fecha_salida">Fecha de salida</label>
                <input type="date" name="fecha_salida" required>
                <label for="habitacion">Tipo de habitacion</label>
                <select name="tipo_habitacion" id="habitacion">
                    <option value="Sencilla">Sencilla - $550</option>
                    <option value="Premium">Premium - $750</option>
                </select>
                <input type="text" name="email_cliente" placeholder="Email del cliente" required>
                <button type="submit">Registrar</button>
            </form>
        </article>
    </div>
</body>
</html>