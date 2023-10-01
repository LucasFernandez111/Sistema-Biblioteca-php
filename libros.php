<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Document</title>
</head>

<body>
    <form action="./services/createLibro.php" method="post">
        <label for="" class="etiquetas">INFO LIBROS</label>
        <label for="" class="etiquetas">Autor</label>
        <input type="text">
        <label for="" class="etiquetas">Titulo</label>
        <input type="text">
        <label for="" class="etiquetas">Precio</label>
        <input type="text">
        <label for="" class="etiquetas">fecha de Retiro</label>
        <input type="date"> <!-- creo que eso va en retiros.php -->

        <input type="submit" id="boton">
    </form>

</body>

</html>