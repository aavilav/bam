<?php
require '../CapaEntidad/calendario.php';
require 'CapaNegocio/clsNegocio.php';
$cal_codigo=$_POST['cal_codigo'];
$cal_titulo=$_POST['cal_titulo'];
$cal_fecha=$_POST['cal_fecha'];
$cal_hora=$_POST['cal_hora'];
$cal_descrip=$_POST['cal_descrip'];
$cal_tipo=$_POST['cal_tipo'];
$emp_apellido=$_POST['emp_apellido'];
$E=new clsNegocio();
$a=$E->BuscarEmpleado($emp_apellido);
foreach($a as $filas){ 
$emp_codigo=$filas['emp_codigo'];
  }
$R=new calendario();
$R->setCal_codigo($cal_codigo);
$R->setCal_titulo($cal_titulo);
$R->setCal_fecha($cal_fecha);
$R->setCal_hora($cal_hora);
$R->setCal_descrip($cal_descrip);
$R->setCal_tipo($cal_tipo);
$R->setEmp_codigo($emp_codigo);

$Ex=new clsNegocio();
$Ex->EditCalendario($R);
session_start();
         $_SESSION['msj']='servicio';

header("location: cronograma.php");
?>
