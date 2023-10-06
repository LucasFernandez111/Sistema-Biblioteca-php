<?php


include('../database/db.php');
$id_libros = $_POST['id_libros'];


$registros = mysqli_query($conexion, "SELECT * FROM t_libros WHERE id_libros='$id_libros'");


$file = mysqli_fetch_array($registros);



if (isset($file)) {

    mysqli_query($conexion, "DELETE FROM t_libros WHERE id_libros = '$id_libros'");
    echo '<h1> Se efectuo correctamente el borrado  <h1>';
} else {
    echo '<h1> No existe el ID ingresado  <h1>';
}


?>