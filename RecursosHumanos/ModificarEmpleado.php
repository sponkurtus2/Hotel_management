<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Hotel - Modificar Empleado</title>
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
            <h1 style="text-align: center;">Recursos humanos - Modificar empleado</h1>

            <!-- Formulario para modificar empleado -->
            <form action="procesarModificarEmpleado.php" method="POST">
                <label for="id">ID del empleado a modificar:</label>
                <input type="text" id="id" name="id" required>

                <label for="nombre">Nuevo nombre:</label>
                <input type="text" id="nombre" name="nombre">

                <label for="puesto">Nuevo puesto:</label>
                <input type="text" id="puesto" name="puesto">

                <label for="direccion">Nueva dirección:</label>
                <input type="text" id="direccion" name="direccion">

                <label for="telefono">Nuevo teléfono:</label>
                <input type="text" id="telefono" name="telefono">

                <button type="submit">Modificar empleado</button>
            </form>

            <a href="ListarEmpleados.php"><button>Volver a la lista de empleados</button></a>
        </article>
    </div>
</body>
</html>
