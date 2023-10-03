<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Document</title>
</head>

<body>
 
    <div>
    <form action="./services/createUser.php" method="post">
        <h1>Client</h1>
        <label for="" class="etiquetas">Nombre</label>
        <input type="text" name="name" class="inputs">
        <label for="" class="etiquetas">Apellido</label>
        <input type=" text" name="apellido" class="inputs">
        <label for="" class="etiquetas">Direccion</label>
        <input type=" text" name="direccion" class="inputs">
        <label for="" class="etiquetas">DNI</label>
        <input type=" text" name="dni" class="inputs">
        <label for="" class="etiquetas">Estado</label>
        <input type=" text" name="estado" class="inputs">
        <label for="" class="etiquetas">Ciudad</label>
        <input type=" text" name="ciudad" class="inputs">
        <input type="submit" id="boton">
    </form>
    </div>

</body>

</html>