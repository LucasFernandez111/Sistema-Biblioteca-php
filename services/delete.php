<?php
include('../database/db.php');


$registros=mysqli_query($conexion,"select id_libros from t_libros where id_libros='$_REQUEST[id_libros]'");

if($reg=mysqli_fetch_array($registros))
{
    mysqli_query($conexion,"delete from t_libros where id_libros='$_request[nombre]'");
    echo "se efectuó el borrado";
}
else
{
echo "no existe el id";
}
mysqli_close($conexion);


    ?>