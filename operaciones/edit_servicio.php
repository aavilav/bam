<?php
require '../CapaEntidad/servicio.php';
require 'CapaNegocio/clsNegocio.php';
$ser_codigo=$_POST['ser_codigo'];
$ser_equipo=$_POST['ser_equipo'];
$ser_defecto=$_POST['ser_defecto'];
$ser_marca=$_POST['ser_marca'];
$ser_modelo=$_POST['ser_modelo'];
$ser_serie=$_POST['ser_serie'];
$ser_obs=$_POST['ser_obs'];


$objC=new servicio();
$objC->setSer_codigo($ser_codigo);
$objC->setSer_equipo($ser_equipo);
$objC->setSer_defecto($ser_defecto);
$objC->setSer_marca($ser_marca);
$objC->setSer_modelo($ser_modelo);
$objC->setSer_serie($ser_serie);
$objC->setSer_obs($ser_obs);

$Reg=new clsNegocio();
$Reg->EditServicio($objC);
session_start();
         $_SESSION['msj']='servicio';

header("location: cronograma.php");
?>
