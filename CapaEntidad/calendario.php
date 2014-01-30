<?php

class calendario {
    private $cal_codigo;
    private $cal_titulo;
    private $cal_fecha;
    private $cal_hora;
    private $cal_descrip;
    private $cal_tipo;
    private $cli_codigo;
    private $emp_codigo;
    
    public function getCal_codigo() {
        return $this->cal_codigo;
    }

    public function setCal_codigo($cal_codigo) {
        $this->cal_codigo = $cal_codigo;
    }

    public function getCal_titulo() {
        return $this->cal_titulo;
    }

    public function setCal_titulo($cal_titulo) {
        $this->cal_titulo = $cal_titulo;
    }

    public function getCal_fecha() {
        return $this->cal_fecha;
    }

    public function setCal_fecha($cal_fecha) {
        $this->cal_fecha = $cal_fecha;
    }

    public function getCal_hora() {
        return $this->cal_hora;
    }

    public function setCal_hora($cal_hora) {
        $this->cal_hora = $cal_hora;
    }

    public function getCal_descrip() {
        return $this->cal_descrip;
    }

    public function setCal_descrip($cal_descrip) {
        $this->cal_descrip = $cal_descrip;
    }

    public function getCal_tipo() {
        return $this->cal_tipo;
    }

    public function setCal_tipo($cal_tipo) {
        $this->cal_tipo = $cal_tipo;
    }

    public function getCli_codigo() {
        return $this->cli_codigo;
    }

    public function setCli_codigo($cli_codigo) {
        $this->cli_codigo = $cli_codigo;
    }

    public function getEmp_codigo() {
        return $this->emp_codigo;
    }

    public function setEmp_codigo($emp_codigo) {
        $this->emp_codigo = $emp_codigo;
    }


}

?>
