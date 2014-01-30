<?php
require '../CapaEntidad/reclamos.php';
require 'CapaNegocio/clsNegocio.php';
$ser_codigo=$_POST['ser_codigo'];
$rec_motivo=$_POST['rec_motivo'];
$rec_detalle=$_POST['rec_detalle'];
$rec_fecha=$_POST['rec_fecha'];


$objE=new reclamos();
$objE->setRec_codigo('');
$objE->setRec_motivo($rec_motivo);
$objE->setRec_fecha($rec_fecha);
$objE->setRec_detalle($rec_detalle);
$objE->setSer_codigo($ser_codigo);


$Reg= new clsDatos();
$Reg->AddReclamo($objE);
session_start();
$_SESSION['msj']='servicio';
header("location: cronograma.php");
?>
