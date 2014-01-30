<?php
require '../CapaEntidad/incidencias.php';
require 'CapaNegocio/clsNegocio.php';
$ser_codigo=$_POST['ser_codigo'];
$inc_asunto=$_POST['inc_asunto'];
$inc_descripcion=$_POST['inc_descripcion'];

$objE=new incidencias();
$objE->setInc_codigo('');
$objE->setInc_asunto($inc_asunto);
$objE->setInc_descripcion($inc_descripcion);
$objE->setSer_codigo($ser_codigo);

$Reg= new clsDatos();
$Reg->AddIncidencia($objE);

session_start();
$_SESSION['msj']='servicio';
header("location: cronograma.php");
?>
