<?php

class incidencias {
    private $inc_codigo;
    private $inc_asunto;
    private $inc_descripcion;
    private $ser_codigo;
    
    public function getInc_codigo() {
        return $this->inc_codigo;
    }

    public function setInc_codigo($inc_codigo) {
        $this->inc_codigo = $inc_codigo;
    }

    public function getInc_asunto() {
        return $this->inc_asunto;
    }

    public function setInc_asunto($inc_asunto) {
        $this->inc_asunto = $inc_asunto;
    }

    public function getInc_descripcion() {
        return $this->inc_descripcion;
    }

    public function setInc_descripcion($inc_descripcion) {
        $this->inc_descripcion = $inc_descripcion;
    }

    public function getSer_codigo() {
        return $this->ser_codigo;
    }

    public function setSer_codigo($ser_codigo) {
        $this->ser_codigo = $ser_codigo;
    }


}

?>
