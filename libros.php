<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Document</title>
</head>

<body>
    <ul>
        <li><a href="index.php">clientes</a></li>
        <li><a href="retiros.php">retiros</a></li>
    </ul>


    <form action="./services/createLibro.php" method="post">
        <label for="" class="etiquetas">INFO LIBROS</label>
        <label for="" class="etiquetas">Autor</label>
        <input type="text" name="autor" class="inputs">
        <label for="" class="etiquetas">Titulo</label>
        <input type="text" name="titulo" class="inputs">
        <label for="" class="etiquetas">Precio</label>
        <input type="text" name="precio" class="inputs">
     
        <input type="submit" id="boton">
    </form>

</body>

</html>