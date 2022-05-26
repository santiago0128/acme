<?php

class vehiculo
{

    private $conn;

    // instacion de la clase de conexion a la base de datos
    public function __construct()
    {
        if (is_file('config/config.php')) {
            require_once "config/config.php";
        } else {
            require_once "../config/config.php";
        }
        $this->conn = new Conexion();
    }

    // consulta para traer informacion de los vehiculos, los propetario y los conductores para informe 
    function selectevhiculo()
    {
        $sql = "SELECT
        v.id,
        v.marca,
        c.primer_nombre as nombre_conductor,
        c.apellido as apellido_conductor,
        v.placa,
        v.color,
        p.primer_nombre as nombre_propietario,
        p.apellidos as apellido_propietario,
        v.tipo_vehiculo from vehiculo v inner join propietarios p on v.propietario = p.identificacion INNER join conductor c on c.identificacion = v.conductor  ";
        return $this->conn->getData($sql);
    }

    // metodo de insercion a la base de datos de la informacion del formulario
    function insertvehiculo($placa, $marca, $color, $tipo_vehiculo, $conductor, $propietario)
    {
        $sql = "INSERT INTO `vehiculo`(`marca`, `conductor`, `placa`, `color`, `propietario`, `tipo_vehiculo`)
         VALUES ('$marca','$conductor','$placa','$color','$propietario','$tipo_vehiculo')";
        return $this->conn->updateData($sql);
    }
}
