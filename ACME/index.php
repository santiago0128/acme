<?php

   //llamado de modelos
    require_once "modelos/conductor.php";
    require_once "modelos/vehiculo.php";
    require_once "modelos/propietario.php";

    // instancia de clases 
    $objetoconductor = new conductor;
    $objetovehiculo = new vehiculo;
    $objetopropietario = new propietario;

    //llamado de consultas a la base de datos para reportes
    $propietario = $objetopropietario->selectpropietario();
    $informe = $objetovehiculo->selectevhiculo();
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
                <a class="navbar-brand" href="#">Acme</a>
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
                                <li><a class="dropdown-item" href="views/addpropietario.php">Agregar</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Vehiculos
                            </a>
                             <!-- redireccionamiento a vista para agregar un vehiculo a la base de datos -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href=" views/addvehiculo.php">Agregar</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Conductor
                            </a>
                             <!-- redireccionamiento a vista para agregar un conductor a la base de datos -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href=" views/addconductor.php">Agregar</a></li>

                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="px-4 my-5 text-center">
            <div class="card">
                <h1>Administrador</h1>
                <div class="row">
                    <div class="col">
                        <h3>Propietario</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Numero de cedula</th>
                                    <th scope="col">Primer Nombre</th>
                                    <th scope="col">Segundo Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Direccion</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Ciudad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- recorriendo el objeto con la información de los propietarios -->
                                <?php foreach ($propietario as $key) {
                                    echo '<tr>';
                                    echo '<td>' . $key['id'] . '</td>';
                                    echo '<td>' . $key['identificacion'] . '</td>';
                                    echo '<td>' . $key['primer_nombre'] . '</td>';
                                    echo '<td>' . $key['segundo_nombre'] . '</td>';
                                    echo '<td>' . $key['apellidos'] . '</td>';
                                    echo '<td>' . $key['direccion'] . '</td>';
                                    echo '<td>' . $key['telefono'] . '</td>';
                                    echo '<td>' . $key['ciudad'] . '</td>';
                                    echo '</tr>';
                                } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <h3>Conductor</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Numero de cedula</th>
                                    <th scope="col">Primer Nombre</th>
                                    <th scope="col">Segundo Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Direccion</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Ciudad</th>
                                </tr>
                            </thead>
                            <tbody>
                                  <!-- recorriendo el objeto con la información de los conductores -->
                                <?php foreach ($conductor as $key) {
                                    echo '<tr>';
                                    echo '<td>' . $key['id'] . '</td>';
                                    echo '<td>' . $key['identificacion'] . '</td>';
                                    echo '<td>' . $key['primer_nombre'] . '</td>';
                                    echo '<td>' . $key['segundo_nombre'] . '</td>';
                                    echo '<td>' . $key['apellido'] . '</td>';
                                    echo '<td>' . $key['direccion'] . '</td>';
                                    echo '<td>' . $key['telefono'] . '</td>';
                                    echo '<td>' . $key['ciudad'] . '</td>';
                                    echo '</tr>';
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3>Informe</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Placa</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Nombre Completo Conductor</th>
                                    <th scope="col">Nombre Completo Propietario</th>
                                </tr>
                            </thead>
                            <tbody>
                                  <!-- recorriendo el objeto con la información del informe solicitado en la prueba -->
                                <?php foreach ($informe as $key) {
                                    echo '<tr>';
                                    echo '<td>' . $key['id'] . '</td>';
                                    echo '<td>' . $key['placa'] . '</td>';
                                    echo '<td>' . $key['marca'] . '</td>';
                                    echo '<td>' . $key['nombre_conductor'] . " " . $key['apellido_conductor'] . '</td>';
                                    echo '<td>' . $key['nombre_propietario'] . " " . $key['apellido_propietario'] . '</td>';
                                    echo '</tr>';
                                } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <h3>Vehiculos</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Placa</th>
                                    <th scope="col">Color</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Tipo Vehiculo</th>
                                    <th scope="col">Conductor</th>
                                    <th scope="col">Propietario</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <!-- recorriendo el objeto con la información del carros agregados -->
                                <?php foreach ($informe as $key) {
                                    echo '<tr>';
                                    echo '<td>' . $key['id'] . '</td>';
                                    echo '<td>' . $key['placa'] . '</td>';
                                    echo '<td>' . $key['color'] . '</td>';
                                    echo '<td>' . $key['marca'] . '</td>';
                                    echo '<td>' . $key['tipo_vehiculo'] . '</td>';
                                    echo '<td>' . $key['nombre_conductor'] . " " . $key['apellido_conductor'] . '</td>';
                                    echo '<td>' . $key['nombre_propietario'] . " " . $key['apellido_propietario'] . '</td>';
                                    echo '</tr>';
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </html>
