<?php

class conductor
{

    private $conn;

    //instancia de la conexion a la base de datos
    public function __construct()
    {
        if (is_file('config/config.php')) {
            require_once "config/config.php";
        } else {
            require_once "../config/config.php";
        }
        $this->conn = new Conexion();
    }
    // consulta de la tabla de conductor
    function selectconductor()
    {
        $sql = "SELECT * from conductor";
        return $this->conn->getData($sql);
    }
    
    //insercion a la base de datos del formulario para los conductores
    function insertconductor($identificacion, $direccion, $telefono, $primer_nombre, $segundo_nombre, $apellidos, $ciudad)
    {
        $sql = "INSERT INTO `conductor`(`identificacion`, `primer_nombre`, `segundo_nombre`, `apellido`, `direccion`, `telefono`, `ciudad`) 
        VALUES ('$identificacion','$primer_nombre','$segundo_nombre','$apellidos','$direccion','$telefono','$ciudad')";
        return $this->conn->updateData($sql);
    }
}
