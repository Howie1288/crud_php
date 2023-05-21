<?php
require 'Conexion.php';

class Alumnos extends Conexion{
    public $alumno_id;
    public $alumno_nombre1;
    public $alumno_nombre2;
    public $alumno_apellido1;
    public $alumno_apellido2;
    public $alumno_fecnac;
    public $alumno_telefono;
    public $alumno_correo_elect;
    


    public function __construct($args = [] )
    {
        $this->alumno_id = $args['alumno_id'] ?? null;
        $this->alumno_nombre1 = $args['alumno_nombre1'] ?? '';
        $this->alumno_nombre2 = $args['alumno_nombre2'] ?? '';
        $this->alumno_apellido1 = $args['alumno_apellido1'] ?? '';
        $this->alumno_apellido2 = $args['alumno_apellido2'] ?? '';
        $this->alumno_fecnac = $args['alumno_fecnac'] ?? '';
        $this->alumno_telefono = $args['alumno_telefono'] ?? '';
        $this->alumno_correo_elect = $args['alumno_correo_elect'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO Alumnos (alumno_nombre1, alumno_nombre2, alumno_apellido1, alumno_apellido2, alumno_fecnac, alumno_telefono, alumno_correo_elect ) values('$this->alumno_nombre1','$this->alumno_nombre2', '$this->alumno_apellido1', '$this->alumno_apellido2', '$this->alumno_fecnac', '$this->alumno_telefono', '$this->alumno_correo_elect')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
