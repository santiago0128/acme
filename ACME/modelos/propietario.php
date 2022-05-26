<?php

class propietario
{

    private $conn;

    //instancia de la clase de  conexion a la base de datos
    public function __construct()
    {
        if (is_file('config/config.php')) {
            require_once "config/config.php";
        } else {
            require_once "../config/config.php";
        }
        $this->conn = new Conexion();
    }

    //consulta de la tabla de propietarios
    function selectpropietario()
    {
        $sql = "SELECT * from propietarios";
        return $this->conn->getData($sql);
    }


    //insercion a la base de datos de la informacion del propietarios
    function insertpropietario($identificacion, $direccion, $telefono, $primer_nombre, $segundo_nombre, $apellidos, $ciudad)
    {
        $sql = "INSERT INTO `propietarios`(`identificacion`, `primer_nombre`, `segundo_nombre`, `apellidos`, `direccion`, `telefono`, `ciudad`) 
        VALUES ('$identificacion','$primer_nombre','$segundo_nombre','$apellidos','$direccion','$telefono','$ciudad')";
        return $this->conn->updateData($sql);
    }
}
