<?php

    //llamado de los modelos conductor y propietario
    require_once "../modelos/conductor.php";
    require_once "../modelos/propietario.php";

    // instancia de clases conductor y propietario
    $objetoconductor = new conductor;
    $objetopropietario = new propietario;

    //llamado de consultas a la base de datos
    $propietario = $objetopropietario->selectpropietario();
    $conductor = $objetoconductor->selectconductor();


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Acme</title>
        <link href="assets/style.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>

    <body style="background-color: lightslategrey ;">

        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">Acme</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Propietario
                            </a>
                             <!-- redireccionamiento a vista para agregar un propietario a la base de datos -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="addpropietario.php">Agregar</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Vehiculos
                            </a>
                            <!-- redireccionamiento a vista para agregar un vehiculo a la base de datos -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Agregar</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Conductor
                            </a>
                            <!-- redireccionamiento a vista para agregar un conductor a la base de datos -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="addconductor.php">Agregar</a></li>

                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="px-4 my-5 text-center">
            <div class="card">
                <h1>Agregar Vehiculo</h1>
            </div>
            &nbsp;
            <div class="card">
                <div class="container">
                    <!-- formulario de ingreso de informacion a la base de datos -->
                    <form action="../controller/vehiculocontroller.php" method="POST">
                        <div class="row" style="padding-top: 25px;">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Placa</label>
                                    <input type="text" class="form-control" name="placa" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Marca</label>
                                    <input type="text" class="form-control" name="marca" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Color</label>
                                    <input type="text" class="form-control" name="color" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Tipo Vehiculo</label>
                                    <select name="tipo_vehiculo" id="tipo_vehiculo" class="form-control">
                                        <option value="0">Seleccione</option>
                                        <option value="Particular">Particular</option>
                                        <option value="Publico">Publico</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Conductor</label>
                                    <select name="conductor" id="conductor" class="form-control">
                                        <option value="0">Seleccione</option>
                                        <!-- mostrar informacion de los conductores -->
                                        <?php foreach ($conductor as $key ) {
                                           echo '<option value= '.$key['identificacion'].'>'.$key['primer_nombre'].' '.$key['apellido'].'</option>';
                                        } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Propietario</label>
                                    <select name="propietario" id="propietario" class="form-control">
                                        <option value="0">Seleccione</option>
                                         <!-- mostrar informacion de los propietarios -->
                                        <?php foreach ($propietario as $key ) {
                                           echo '<option value= '.$key['identificacion'].'>'.$key['primer_nombre'].' '.$key['apellidos'].'</option>';
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="addvehiculo">
                        </div>
                        <input type="submit" class="btn btn-success" value="Agregar">
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </html>
