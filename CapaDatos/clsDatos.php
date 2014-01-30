<?php
/*
 * @author AVIVILAL
 */
class clsDatos {
   // Atributos o Campos
    private $servidor = "localhost";
    private $usuario = "root";
    private $password = "root";
    private $bd = "bam";
    private $Conexion;
    private $filas = array();
    
    // Constructor de la Clase
    function __construct() {
        try {
        $this->Conexion = new PDO("mysql:host=".$this->servidor.
                ";dbname=".$this->bd,  $this->usuario, $this->password);
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }  
    }
    
    // Metodo para ejecutar una consulta
    function EjecutarSQL($query)
    {
        try {
            $db = $this->Conexion; 
            $stmt = $db->query($query);
            foreach($stmt as $fila)
                $this->filas[] = $fila; 
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
        return $this->filas;
    }
    
    // Metodo para ejecutar una consulta
    function EjecutarSQLFILA($query)
    {
        try {
            $db = $this->Conexion;
            $stmt = $db->query($query);
            $fila = $stmt->fetch();
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
        return $fila;
    }
       function AddCliente(cliente $objC){
       $sql="INSERT INTO cliente VALUES('".
                    $objC->getCli_codigo()."','".
                    $objC->getCli_razon()."','".
                    $objC->getCli_ruc()."','".
                    $objC->getCli_direccion()."','".
                    $objC->getCli_distrito()."','".
                    $objC->getCli_nombre()."','".
                    $objC->getCli_apellido()."','".
                    $objC->getCli_telefono()."','".
                    $objC->getCli_celular()."')";
//       echo $sql;
  //     die();
       try {
            $this->Conexion->query($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function AddEmpleado(empleado $objE){
       $sql="INSERT INTO empleado VALUES('".
                    $objE->getEmp_codigo()."','".
                    $objE->getEmp_nombre()."','".
                    $objE->getEmp_apellido()."','".
                    $objE->getEmp_dni()."','".
                    $objE->getEmp_direccion()."','".
                    $objE->getEmp_distrito()."','".
                    $objE->getEmp_telefono()."','".
                    $objE->getEmp_celular()."','".
                    $objE->getEmp_puesto()."')";
//       echo $sql;
//       die();
       try {
            $this->Conexion->query($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     function AddCalendario(calendario $objR){
       $sql="INSERT INTO calendario VALUES('".
                    $objR->getCal_codigo()."','".
                    $objR->getCal_titulo()."','".
                    $objR->getCal_fecha()."','".
                    $objR->getCal_hora()."','".
                    $objR->getCal_descrip()."','".
                    $objR->getCal_tipo()."','".
                    $objR->getCli_codigo()."','".
                    $objR->getEmp_codigo()."')";
//       echo $sql;
//      die();
       try {
            $this->Conexion->query($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    function AddServicio(servicio $objS){
       $sql="INSERT INTO servicio VALUES('".
                    $objS->getSer_codigo()."','".
                    $objS->getSer_equipo()."','".
                    $objS->getSer_defecto()."','".
                    $objS->getSer_marca()."','".
                    $objS->getSer_modelo()."','".
                    $objS->getSer_serie()."','".
                    $objS->getSer_obs()."','".
                    $objS->getSer_con()."','".
                    $objS->getCal_codigo()."')";
// echo $sql;
// die();
       try {
            $this->Conexion->query($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    function InsertarProducto(productos $objP){
       $sql="INSERT INTO productos VALUES('".
                    $objP->getPro_codigo()."','".
                    $objP->getPro_nombre()."','".
                    $objP->getPro_stock()."','".
                    $objP->getPro_um()."','".
                    $objP->getPro_fecha()."')";
       try {
            $this->Conexion->query($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function AddReclamo(reclamos $objP){
       $sql="INSERT INTO reclamos VALUES('".
                    $objP->getRec_codigo()."','".
                    $objP->getRec_fecha()."','".
                    $objP->getRec_motivo()."','".
                    $objP->getRec_detalle()."','".
                    $objP->getSer_codigo()."')";
//        echo $sql;
//      die();
       try {
            $this->Conexion->query($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function AddIncidencia(incidencias $objP){
       $sql="INSERT INTO incidencias VALUES('".
                    $objP->getInc_codigo()."','".
                    $objP->getInc_asunto()."','".
                    $objP->getInc_descripcion()."','".
                    $objP->getSer_codigo()."')";
//        echo $sql;
//      die();
       try {
            $this->Conexion->query($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function AddEncuesta(encuesta $objN){
       $sql="INSERT INTO encuestas VALUES('".
                    $objN->getEnc_codigo()."','".
                    $objN->getEnc_p1()."','".
                    $objN->getEnc_p2()."','".
                    $objN->getEnc_p3()."','".
                    $objN->getEnc_p4()."','".
                    $objN->getEnc_p5()."','".
                    $objN->getEnc_p6()."','".
                    $objN->getEnc_p7()."','".
                    $objN->getEnc_p8()."','".
                    $objN->getEnc_p9()."','".
                    $objN->getEnc_p10()."','".
                    $objN->getEnc_res()."','".
                    $objN->getTip_codigo()."','".
                    $objN->getSer_codigo()."')";
//       echo $sql;
//      die();
       try {
            $this->Conexion->query($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function EditCliente(cliente $objC){
        $sql="UPDATE cliente SET 
            cli_razon='".$objC->getCli_razon()."', 
            cli_ruc='".$objC->getCli_ruc()."',  
            cli_direccion='".$objC->getCli_direccion()."', 
            cli_distrito='".$objC->getCli_distrito()."',
            cli_nombre='".$objC->getCli_nombre()."',
            cli_apellido='".$objC->getCli_apellido()."',
            cli_telefono='".$objC->getCli_telefono()."',
            cli_celular='".$objC->getCli_celular()."'
            where cli_codigo='".$objC->getCli_codigo()."'";
         try {
            $this->Conexion->query($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
//      echo $sql;
// die();
    }

    function EditCalendario(calendario $objC){
        $sql="UPDATE calendario SET 
            cal_titulo='".$objC->getCal_titulo()."',  
            cal_fecha='".$objC->getCal_fecha()."', 
            cal_hora='".$objC->getCal_hora()."',
            cal_descrip='".$objC->getCal_descrip()."',
            cal_tipo='".$objC->getCal_tipo()."',
            emp_codigo='".$objC->getEmp_codigo()."'
            where cal_codigo='".$objC->getCal_codigo()."'";
         try {
            $this->Conexion->query($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
// echo $sql;
// die();
    }
    
    function EditServicio(servicio $objE){
        $sql="UPDATE servicio SET 
            ser_equipo='".$objE->getSer_equipo()."', 
            ser_defecto='".$objE->getSer_defecto()."',  
            ser_marca='".$objE->getSer_marca()."', 
            ser_modelo='".$objE->getSer_modelo()."',
            ser_serie='".$objE->getSer_serie()."',
            ser_obs='".$objE->getSer_obs()."'
            where ser_codigo='".$objE->getSer_codigo()."'";
         try {
            $this->Conexion->query($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
//      echo $sql;
// die();
    }
    
    function EditConformidad(servicio $objE){
        $sql="UPDATE servicio SET 
            ser_con='".$objE->getSer_con()."' 
            where ser_codigo='".$objE->getSer_codigo()."'";
         try {
            $this->Conexion->query($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
//      echo $sql;
// die();
    }
    function InsertarIngresos(registro $objI){
        $sql="INSERT INTO registro VALUES('".
                    $objI->getReg_codigo()."','".
                    $objI->getReg_fecha()."','".
                    $objI->getPro_codigo()."','".
                    $objI->getReg_cant()."','".
                    $objI->getReg_saldo()."','".
                    $objI->getReg_documento()."','".
                    $objI->getReg_guia()."','".
                    $objI->getTipo()."')";
         try {
            $this->Conexion->query($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
}
?>
