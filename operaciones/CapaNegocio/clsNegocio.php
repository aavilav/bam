<?php
/**
 * Description of clsProductos
 *
 * @author AVIVILAL
 */
require '../CapaDatos/clsDatos.php';
class clsNegocio {
    private $ObjP;
    
    function __construct() {
        $this->ObjP = new clsDatos();
    }
    function ListarReclamo(){
        return $this->ObjP->EjecutarSQL("SELECT * FROM  reclamos ORDER BY  rec_fecha DESC");
    }
    function ListarIncidencia(){
        return $this->ObjP->EjecutarSQL("SELECT * FROM  incidencias ORDER BY  inc_codigo DESC");
    }
   
    function ListarCalendario(){
        return $this->ObjP->EjecutarSQL("SELECT * FROM calendario ORDER BY cal_hora");
    }
    function RpIndicadores($fch){
        return $this->ObjP->EjecutarSQL("SELECT *
FROM encuestas a
LEFT JOIN servicio b ON a.ser_codigo = b.ser_codigo
LEFT JOIN calendario c ON c.cal_codigo = b.cal_codigo
WHERE tip_codigo =2
AND c.cal_fecha = '$fch'");
    }
    function ConsultaEncuestas($fch){
        return $this->ObjP->EjecutarSQL("SELECT * 
FROM encuestas a
INNER JOIN servicio b ON a.ser_codigo = b.ser_codigo
INNER JOIN calendario c ON b.cal_codigo = c.cal_codigo
INNER JOIN cliente d ON c.cli_codigo = d.cli_codigo
WHERE a.tip_codigo =1 and c.cal_fecha='$fch'
GROUP BY d.cli_codigo");
    }
    function Reclamos($fch){
//        $hoy=date('y-m-d');
//        $ayer=$hoy-1;
        return $this->ObjP->EjecutarSQL("SELECT * , COUNT( a.ser_codigo ) AS con
FROM reclamos a
INNER JOIN servicio b ON a.ser_codigo = b.ser_codigo
INNER JOIN calendario c ON b.cal_codigo = c.cal_codigo
INNER JOIN cliente d ON c.cli_codigo = d.cli_codigo
WHERE a.rec_fecha='$fch' GROUP BY d.cli_codigo");
    }
    function PostEncuesta($fch){
        return $this->ObjP->EjecutarSQL("
SELECT * 
FROM encuestas a
INNER JOIN servicio b ON a.ser_codigo = b.ser_codigo
INNER JOIN calendario c ON b.cal_codigo = c.cal_codigo
INNER JOIN cliente d ON c.cli_codigo = d.cli_codigo
WHERE a.tip_codigo =2 and c.cal_fecha='$fch'
GROUP BY d.cli_codigo");
    }
    function RpEmpleados($id){
        return $this->ObjP->EjecutarSQL("SELECT * 
FROM encuestas a
INNER JOIN servicio b ON a.ser_codigo = b.ser_codigo
INNER JOIN calendario c ON b.cal_codigo = c.cal_codigo
INNER JOIN empleado d ON c.emp_codigo = d.emp_codigo
WHERE d.emp_codigo =$id and a.tip_codigo =2");
    }
    function RpEmpleados2($fch){
        return $this->ObjP->EjecutarSQL("SELECT * 
FROM encuestas a
INNER JOIN servicio b ON a.ser_codigo = b.ser_codigo
INNER JOIN calendario c ON b.cal_codigo = c.cal_codigo
INNER JOIN empleado d ON c.emp_codigo = d.emp_codigo LEFT JOIN calendario e ON b.cal_codigo=e.cal_codigo
WHERE a.tip_codigo =2 AND e.cal_fecha='$fch'
GROUP BY d.emp_codigo");
    }
    function BuscarCalendario2($cal_codigo){
        return $this->ObjP->EjecutarSQL("SELECT * FROM calendario a INNER JOIN empleado b ON a.emp_codigo=b.emp_codigo INNER JOIN cliente c ON a.cli_codigo=c.cli_codigo  WHERE cal_codigo=$cal_codigo");
    }
    function BuscarServicio($cal_codigo){
        return $this->ObjP->EjecutarSQL("SELECT * FROM servicio a INNER JOIN calendario b ON a.cal_codigo=b.cal_codigo WHERE a.cal_codigo=$cal_codigo");
    }
    function BuscarCalendario($cli_codigo){
       return $this->ObjP->EjecutarSQL("SELECT a.cal_codigo, a.cal_titulo, a.cal_fecha, a.cal_hora, a.cal_descrip, a.cal_tipo, b.cli_codigo FROM calendario a INNER JOIN cliente b ON a.cli_codigo = b.cli_codigo 
            WHERE b.cli_codigo =$cli_codigo ORDER BY a.cal_hora");
    }
    function ConsultarServicio($ser_codigo){
        return $this->ObjP->EjecutarSQL("SELECT * FROM servicio WHERE ser_codigo=$ser_codigo");
    }
    function ListarCliente(){
        return $this->ObjP->EjecutarSQL("SELECT * FROM cliente");
    }
    
    function BuscarFecha($fecha, $hora){
       return $this->ObjP->EjecutarSQL("SELECT * FROM calendario WHERE cal_fecha='$fecha' and cal_hora='$hora'");
    }
    
    function BuscarDisp($empleado){
        return $this->ObjP->EjecutarSQL("SELECT * FROM calendario a INNER JOIN empleado b ON a.emp_codigo=b.emp_codigo WHERE b.emp_apellido='$empleado'");
    }
    function BuscarEncuesta($ser_codigo){
        return $this->ObjP->EjecutarSQL("SELECT * FROM encuestas WHERE ser_codigo=$ser_codigo");
    }
    
    function ListarEmpleado(){
        return $this->ObjP->EjecutarSQL("SELECT * FROM empleado");
    }
    function ConsultaEmpleado($emp_codigo){
        return $this->ObjP->EjecutarSQL("SELECT * FROM empleado WHERE emp_codigo=$emp_codigo");
    }
   
    function BuscarEmpleado($emp_apellido){
        return $this->ObjP->EjecutarSQL("SELECT * FROM empleado WHERE emp_apellido REGEXP '$emp_apellido'");
//      return$r[0];
    }
    function BuscarCliente($cli_razon){
        return $this->ObjP->EjecutarSQL("SELECT * FROM cliente WHERE cli_razon='$cli_razon'");
//      return$r[0];
    }
    function AddCliente(cliente $objC){
        $this->ObjP->AddCliente($objC);
    }
    
    function AddEmpleado(empleado $objE){
        $this->ObjP->AddEmpleado($objE);
    }
    
    function AddCalendario(calendario $objR){
        $this->ObjP->AddCalendario($objR);
    }
        function AddServicio(servicio $objS){
        $this->ObjP->AddServicio($objS);
    }
    
    function AddEncuesta(encuesta $objN){
        $this->ObjP->AddEncuesta($objN);
    }
    function AddReclamo(reclamos $objN){
        $this->ObjP->AddReclamo($objN);
    }
    function AddIncidencia(reclamos $objN){
        $this->ObjP->AddIncidencia($objN);
    }
    function EditCliente(cliente $objC){
        $this->ObjP->EditCliente($objC);
    }
    function EditCalendario(calendario $objR){
        $this->ObjP->EditCalendario($objR);
    }
     function EditEmpleado(empleado $objE){
        $this->ObjP->EditEmpleado($objE);
    }
    function EditServicio(servicio $objE){
        $this->ObjP->EditServicio($objE);
    }
    function EditConformidad(servicio $objE){
        $this->ObjP->EditConformidad($objE);
    }
}

?>
