<?php

class reclamos {
    private $rec_codigo;
    private $rec_fecha;
    private $rec_motivo;
    private $rec_detalle;
    private $ser_codigo;
    
    public function getRec_codigo() {
        return $this->rec_codigo;
    }

    public function setRec_codigo($rec_codigo) {
        $this->rec_codigo = $rec_codigo;
    }

    public function getRec_fecha() {
        return $this->rec_fecha;
    }

    public function setRec_fecha($rec_fecha) {
        $this->rec_fecha = $rec_fecha;
    }

    public function getRec_motivo() {
        return $this->rec_motivo;
    }

    public function setRec_motivo($rec_motivo) {
        $this->rec_motivo = $rec_motivo;
    }

    public function getRec_detalle() {
        return $this->rec_detalle;
    }

    public function setRec_detalle($rec_detalle) {
        $this->rec_detalle = $rec_detalle;
    }

    public function getSer_codigo() {
        return $this->ser_codigo;
    }

    public function setSer_codigo($ser_codigo) {
        $this->ser_codigo = $ser_codigo;
    }

}

?>
