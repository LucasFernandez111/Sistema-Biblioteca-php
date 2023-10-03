<?php

include('../database/db.php');


$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$precio = $_POST['precio'];




$query = "INSERT INTO t_libros (titulo,autor,precio) VALUES ('$titulo','$autor','$precio')";
$result = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

header('Location: ../retiros.php')


    ?>