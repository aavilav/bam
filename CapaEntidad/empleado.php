<?php

class empleado {
    private $emp_codigo;
    private $emp_nombre;
    private $emp_apellido;
    private $emp_dni;
    private $emp_direccion;
    private $emp_distrito;
    private $emp_telefono;
    private $emp_celular;
    private $emp_puesto;
    
    public function getEmp_codigo() {
        return $this->emp_codigo;
    }

    public function setEmp_codigo($emp_codigo) {
        $this->emp_codigo = $emp_codigo;
    }

    public function getEmp_nombre() {
        return $this->emp_nombre;
    }

    public function setEmp_nombre($emp_nombre) {
        $this->emp_nombre = $emp_nombre;
    }

    public function getEmp_apellido() {
        return $this->emp_apellido;
    }

    public function setEmp_apellido($emp_apellido) {
        $this->emp_apellido = $emp_apellido;
    }

    public function getEmp_dni() {
        return $this->emp_dni;
    }

    public function setEmp_dni($emp_dni) {
        $this->emp_dni = $emp_dni;
    }

    public function getEmp_direccion() {
        return $this->emp_direccion;
    }

    public function setEmp_direccion($emp_direccion) {
        $this->emp_direccion = $emp_direccion;
    }

    public function getEmp_distrito() {
        return $this->emp_distrito;
    }

    public function setEmp_distrito($emp_distrito) {
        $this->emp_distrito = $emp_distrito;
    }

    public function getEmp_telefono() {
        return $this->emp_telefono;
    }

    public function setEmp_telefono($emp_telefono) {
        $this->emp_telefono = $emp_telefono;
    }

    public function getEmp_celular() {
        return $this->emp_celular;
    }

    public function setEmp_celular($emp_celular) {
        $this->emp_celular = $emp_celular;
    }

    public function getEmp_puesto() {
        return $this->emp_puesto;
    }

    public function setEmp_puesto($emp_puesto) {
        $this->emp_puesto = $emp_puesto;
    }


}

?>
