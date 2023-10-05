<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
 
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light bg-light border-3 border-bottom border-primary">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Biblioteca</a>
                <div id="MenuNavegacion" class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Agregar</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="libros.php">Libros</a></li>
                                <li><a class="dropdown-item" href="retiros.php">Retiros</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Lista</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Clientes</a></li>
                                <li><a class="dropdown-item" href="#" >Libros</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="baja.php" class="nav-link">Baja</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <div class="container min-vh-100 d-flex justify-content-center aling-items-center">
        <form action="./services/createUser.php" method="post" class="row g-3 bg-light">
            <h1>Cliente</h1>

            <div class="col-md-6">   
                <label for="" class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label for="" class="form-label">Apellido</label>
                <input type=" text" name="apellido" class="form-control" required>
            </div>

            <div class="col-12">
                <label for="" class="form-label">Direccion</label>
                <input type=" text" name="direccion" class="form-control" required>
            </div>

            <div class="col-12">
                <label for="" class="form-label">DNI</label>
                <input type=" text" name="dni" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label for="" class="form-label">Estado</label>
                <input type=" text" name="estado" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label for="" class="form-label">Ciudad</label>
                <input type=" text" name="ciudad" class="form-control" required>
            </div>

            <input type="submit" class="btn btn-primary">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>