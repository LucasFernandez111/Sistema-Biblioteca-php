<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="./services/createUser.php" method="post">
        <h1>Client</h1>
        <label for="">Nombre</label>
        <input type="text" name="name">
        <label for="">Apellido</label>
        <input type=" text" name="apellido">
        <label for="">Direccion</label>
        <input type=" text" name="direccion">
        <label for="">DNI</label>
        <input type=" text" name="dni">
        <label for="">Estado</label>
        <input type=" text" name="estado">
        <label for="">Ciudad</label>
        <input type=" text" name="ciudad">
        <input type="submit">
    </form>

</body>

</html>