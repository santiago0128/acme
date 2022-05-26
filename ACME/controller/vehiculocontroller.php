<?php
//llamado de modelo vehiculo
require_once "../modelos/vehiculo.php";
//instancia de la clase vehiculo
$objetovehiculo = new vehiculo;
//verifica si llega un objeto por el metodo POST llamado addvehiculo
if (isset($_POST['addvehiculo'])) {
    //asigancion de variables
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $color = $_POST['color'];
    $tipo_vehiculo = $_POST['tipo_vehiculo'];
    $conductor = $_POST['conductor'];
    $propietario = $_POST['propietario'];
    //envio de variables al metodo de insercion a la base de datos
    $objetovehiculo->insertvehiculo($placa, $marca, $color, $tipo_vehiculo, $conductor, $propietario);
    //redireccionamiento al index
    header("Location: ../index.php");
}
