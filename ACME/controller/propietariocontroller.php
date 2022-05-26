<?php


//llamado del modelo propietario.php
require_once "../modelos/propietario.php";
//instancia del objeto propietario
$objetopropietario = new propietario;

//verifica si llega un objeto por el metodo POST con el nombre de addpropetario

if (isset($_POST['addpropietario'])) {
    //asigancion de variables
    $identificacion = $_POST['identificacion'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $apellidos = $_POST['apellidos'];
    $ciudad = $_POST['ciudad'];
    //envio de variables al metodo de insercion a la base de datos
    $objetopropietario->insertpropietario($identificacion, $direccion, $telefono, $primer_nombre, $segundo_nombre, $apellidos, $ciudad);
    //redireccionamiento al index
    header("Location: ../index.php");
}
