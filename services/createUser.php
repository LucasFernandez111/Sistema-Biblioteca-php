<?php

include('../database/db.php');


$nombre = $_POST['name'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$estado = $_POST['estado'];


$query = "INSERT INTO t_clientes (nombre,apellido,direccion,ciudad,estado,dni) VALUES ('$nombre','$apellido','$direccion','$ciudad','$estado','$dni')";
$result = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

header('Location: ../libros.php')

?>