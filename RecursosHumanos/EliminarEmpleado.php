<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Hotel - Eliminar Empleado</title>
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
            <h1 style="text-align: center;">Recursos humanos - Eliminar empleado</h1>

            <!-- Formulario para eliminar empleado -->
            <form action="procesarEliminarEmpleado.php" method="POST">
                <label for="id">ID del empleado a eliminar:</label>
                <input type="text" id="id" name="id" required>

                <button type="submit">Eliminar empleado</button>
            </form>

            <a href="index.php"><button>Volver a la lista de empleados</button></a>
        </article>
    </div>
</body>
</html>
