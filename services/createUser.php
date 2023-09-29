<?php

include('../database/db.php');


$nombre = $_POST['name'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$estado = $_POST['estado'];


$query = "INSERT INTO T_cliente (nombre,apellido,direccion,ciudad,estado,dni) VALUES ('$nombre','$apellido','$direccion','$ciudad','$estado','$dni')";
$result = mysqli_query($conexion, $query);


if (isset($result)) {
    echo "Usuario Creado";
}

?>