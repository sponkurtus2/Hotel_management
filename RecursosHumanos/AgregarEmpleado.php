<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Hotel - Agregar Empleado</title>
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
            <h1 style="text-align: center;">Recursos humanos - Agregar empleado</h1>

            <!-- Formulario para agregar empleado -->
            <form action="procesarAgregarEmpleado.php" method="POST">
                <label for="nombre">Nombre del empleado:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="puesto">Puesto:</label>
                <input type="text" id="puesto" name="puesto" required>

                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion">

                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono">

                <button type="submit">Agregar empleado</button>
            </form>

            <a href="index.php"><button>Volver a la lista de empleados</button></a>
        </article>
    </div>
</body>
</html>
