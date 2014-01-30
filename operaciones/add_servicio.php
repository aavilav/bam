<?php
require '../CapaEntidad/calendario.php';
require 'CapaNegocio/clsNegocio.php';

$titulo=$_POST['cal_titulo'];
$cal_fecha=$_POST['cal_fecha'];
$h=$_POST['h'];
$m=$_POST['m'];
$s=$_POST['s'];
$hora=$h.':'.$m.':'.$s;
$cal_hora=$hora;
$cal_titulo=$hora.' '.$titulo;
$cal_descrip=$_POST['cal_descrip'];
$cal_tipo=$_POST['cal_tipo'];
$cli_razon=$_POST['cli_razon'];
$emp_apellido=$_POST['emp_nombre'];

//$x=new clsNegocio();
//$c=$x->BuscarFecha($cal_fecha, $hora);
//echo $c;
//die();
//$count=  count($c); 
////echo $count;
////die();
//if( $count==0){
//    $y=new clsNegocio();
//    $a=$y->BuscarDisp($emp_apellido);
//    $count2=count($a);
//    if($count2==0){
        $C=new clsNegocio();
        $b=$C->BuscarCliente($cli_razon);
        foreach($b as $fila){ 
        $cli_codigo= $fila['cli_codigo'];
          }
        $E=new clsNegocio();
        $a=$E->BuscarEmpleado($emp_apellido);
        foreach($a as $filas){ 
        $emp_codigo=$filas['emp_codigo'];
          }
         $objR=new calendario();
         $objR->setCal_titulo($cal_titulo);
         $objR->setCal_fecha($cal_fecha);
         $objR->setCal_hora($cal_hora);
         $objR->setCal_descrip($cal_descrip);
         $objR->setCal_tipo($cal_tipo);
         $objR->setCli_codigo($cli_codigo);
         $objR->setEmp_codigo($emp_codigo);

         $R=new clsNegocio();
         $R->AddCalendario($objR);
         session_start();
         $_SESSION['msj']='servicio';
         header("location: cronograma.php");
//     }else{
//        session_start();
//        $_SESSION['emp']='ok';
//        header("location: nuevoservicio.php");
//    }
//}else{
//    session_start();
//    $_SESSION['fecha']='ok';
//    header("location: nuevoservicio.php");
//}
?>
