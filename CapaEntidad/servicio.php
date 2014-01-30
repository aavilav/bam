<?php

class servicio {
    private $ser_codigo;
    private $ser_equipo;
    private $ser_defecto;
    private $ser_marca;
    private $ser_modelo;
    private $ser_serie;
    private $ser_obs;
    private $cal_codigo;
    private $ser_con;
    
    public function getSer_con() {
        return $this->ser_con;
    }

    public function setSer_con($ser_con) {
        $this->ser_con = $ser_con;
    }

        public function getSer_codigo() {
        return $this->ser_codigo;
    }

    public function setSer_codigo($ser_codigo) {
        $this->ser_codigo = $ser_codigo;
    }

    public function getSer_equipo() {
        return $this->ser_equipo;
    }

    public function setSer_equipo($ser_equipo) {
        $this->ser_equipo = $ser_equipo;
    }

    public function getSer_defecto() {
        return $this->ser_defecto;
    }

    public function setSer_defecto($ser_defecto) {
        $this->ser_defecto = $ser_defecto;
    }

    public function getSer_marca() {
        return $this->ser_marca;
    }

    public function setSer_marca($ser_marca) {
        $this->ser_marca = $ser_marca;
    }

    public function getSer_modelo() {
        return $this->ser_modelo;
    }

    public function setSer_modelo($ser_modelo) {
        $this->ser_modelo = $ser_modelo;
    }

    public function getSer_serie() {
        return $this->ser_serie;
    }

    public function setSer_serie($ser_serie) {
        $this->ser_serie = $ser_serie;
    }

    public function getSer_obs() {
        return $this->ser_obs;
    }

    public function setSer_obs($ser_obs) {
        $this->ser_obs = $ser_obs;
    }

    public function getCal_codigo() {
        return $this->cal_codigo;
    }

    public function setCal_codigo($cal_codigo) {
        $this->cal_codigo = $cal_codigo;
    }

}

?>
