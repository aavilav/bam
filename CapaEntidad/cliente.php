<?php

class cliente {
    private $cli_codigo;
    private $cli_razon;
    private $cli_ruc;
    private $cli_direccion;
    private $cli_distrito;
    private $cli_nombre;
    private $cli_apellido;
    private $cli_telefono;
    private $cli_celular;
    
    public function getCli_codigo() {
        return $this->cli_codigo;
    }

    public function setCli_codigo($cli_codigo) {
        $this->cli_codigo = $cli_codigo;
    }

    public function getCli_razon() {
        return $this->cli_razon;
    }

    public function setCli_razon($cli_razon) {
        $this->cli_razon = $cli_razon;
    }

    public function getCli_ruc() {
        return $this->cli_ruc;
    }

    public function setCli_ruc($cli_ruc) {
        $this->cli_ruc = $cli_ruc;
    }

    public function getCli_direccion() {
        return $this->cli_direccion;
    }

    public function setCli_direccion($cli_direccion) {
        $this->cli_direccion = $cli_direccion;
    }

    public function getCli_distrito() {
        return $this->cli_distrito;
    }

    public function setCli_distrito($cli_distrito) {
        $this->cli_distrito = $cli_distrito;
    }

    public function getCli_nombre() {
        return $this->cli_nombre;
    }

    public function setCli_nombre($cli_nombre) {
        $this->cli_nombre = $cli_nombre;
    }

    public function getCli_apellido() {
        return $this->cli_apellido;
    }

    public function setCli_apellido($cli_apellido) {
        $this->cli_apellido = $cli_apellido;
    }

    public function getCli_telefono() {
        return $this->cli_telefono;
    }

    public function setCli_telefono($cli_telefono) {
        $this->cli_telefono = $cli_telefono;
    }

    public function getCli_celular() {
        return $this->cli_celular;
    }

    public function setCli_celular($cli_celular) {
        $this->cli_celular = $cli_celular;
    }


}

?>
