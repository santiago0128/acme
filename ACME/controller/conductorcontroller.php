<?php
// llamado del modelos de conductor.php
require_once "../modelos/conductor.php";

//instancia de la clase conductor
$objetoconductor = new conductor;

//verifica si llega un objeto por metodo POST con el nombre addconductor
if (isset($_POST['addconductor'])) {

    //asignacio de variables 
    $identificacion = $_POST['identificacion'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $apellidos = $_POST['apellidos'];
    $ciudad = $_POST['ciudad'];
    // envio de variable al metodo de insercion a la base de datos
    $objetoconductor->insertconductor($identificacion, $direccion, $telefono, $primer_nombre, $segundo_nombre, $apellidos, $ciudad);
    // redireccionamiento al index
    header("Location: ../index.php");
}
