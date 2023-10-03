<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Retiros</title>
</head>
<body>
    <ul>
        <li><a href="libros.php">libros</a></li>
        <li><a href="index.php">clientes</a></li>
    </ul>


    <form action="./services/createRetiro.php" method="post">
        <label for="" class="etiquetas">Nombre del cliente</label>
        <input type="text" class="inputs" name="nombre_cliente" required>

        <label for="" class="etiquetas">Libro</label>
        <input type="text" class="inputs" name="libro" required>

        <label for="" class="etiquetas">Fecha de retiro</label>
        <input type="date" class="inputs" name="fechaRetiro" required>

        <input type="submit" id="boton">
    </form>
</body>
</html>