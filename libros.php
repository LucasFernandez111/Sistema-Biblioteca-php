<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid ">
        <nav class="navbar navbar-expand-md navbar-light bg-light border-3 border-bottom border-primary">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Biblioteca</a>
                <div id="MenuNavegacion" class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Agregar</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.php">Cliente</a></li>
                                <li><a class="dropdown-item" href="retiros.php">Retiros</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Lista</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Clientes</a></li>
                                <li><a class="dropdown-item" href="#">Libros</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="baja.php" class="nav-link">Baja</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <form action="./services/createLibro.php" method="post" class="bg-light   mt-3">
        <h1 class="etiquetas">INFO LIBROS</h1>
        <div class="row  flex-column ">
            <div class="col">
                <label class="form-label">Autor</label>
                <input type="text" name="autor" class="form-control" required>
            </div>

            <div class="col">
                <label class="form-label">Titulo</label>
                <input type="text" name="titulo" class="form-control" required>
            </div>

            <div class="col">
                <label class="form-label">Precio</label>
                <input type="text" name="precio" class="form-control" required>
            </div>

            <div class="col">
                <label class="form-label">Fecha Retiro</label>
                <input type="date" name="fecha_retiro" class="form-control" required>
            </div>
            <div class="col mt-3">
                <input type="submit" class="btn btn-primary">
            </div>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>