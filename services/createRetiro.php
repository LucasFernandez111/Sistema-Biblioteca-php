<?php

include('../database/db.php');


$nombre = $_POST['nombre_cliente'];
$libro = $_POST['libro'];
$retiro = $_POST['fechaRetiro'];




$query = "INSERT INTO t_retiro (,autor,precio) VALUES ('$titulo','$autor','$precio')";
$result = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

header('Location: ../libros.php')


?>