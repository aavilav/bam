<?php
require '../CapaEntidad/servicio.php';
require 'CapaNegocio/clsNegocio.php';
$ser_equipo=$_GET['ser_equipo'];
$ser_defecto=$_GET['ser_defecto'];
$ser_marca=$_GET['ser_marca'];
$ser_modelo=$_GET['ser_modelo'];
$ser_serie=$_GET['ser_serie'];
$ser_obs=$_GET['ser_obs'];
$cal_codigo=$_GET['cal_codigo'];

$objS= new servicio();
$objS->setSer_codigo('');
$objS->setSer_equipo($ser_equipo);
$objS->setSer_defecto($ser_defecto);
$objS->setSer_marca($ser_marca);
$objS->setSer_modelo($ser_modelo);
$objS->setSer_serie($ser_serie);
$objS->setSer_obs($ser_obs);
$objS->setSer_con('');
$objS->setCal_codigo($cal_codigo);

 $R=new clsNegocio();
 $R->AddServicio($objS);
 session_start();
 $_SESSION['msj']='servicio';
 header("location: cronograma.php")
?>
